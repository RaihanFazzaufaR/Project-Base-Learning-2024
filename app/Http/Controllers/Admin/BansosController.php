<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BansosModel;
use App\Models\AjuanBansosModel;
use App\Models\RekomendasiPenerimaModel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BansosController extends Controller
{
    public function index()
    {
        $page = 'listBansos';
        $selected = 'Bansos';

        $user = BansosModel::paginate(10)->withQueryString();

        return view('Admin.Bansos.index', compact('user', 'page', 'selected'));
    }

    public function rekomendasiBansos()
    {
        $page = 'rekomendasiBansos';
        $selected = 'Bansos';

        $user = RekomendasiPenerimaModel::paginate(10)->withQueryString();

        return view('Admin.Bansos.rekomendasi-bansos', compact('user', 'page', 'selected'));
    }

    private function ahpCalculate($pairwise_matrix)
    {
        // Jumlah kolom
        $column_sums = array_fill(0, count($pairwise_matrix), 0);
        foreach ($pairwise_matrix as $row) {
            foreach ($row as $key => $value) {
                $column_sums[$key] += $value;
            }
        }
        // Normalisasi matriks
        function normalize_matrix($matrix, $column_sums)
        {
            $normalized_matrix = [];
            foreach ($matrix as $row) {
                $normalized_row = [];
                foreach ($row as $key => $value) {
                    $normalized_row[] = $value / $column_sums[$key];
                }
                $normalized_matrix[] = $normalized_row;
            }
            return $normalized_matrix;
        }
        // rata-rata baris
        function calculate_priority_vector($normalized_matrix)
        {
            $priority_vector = [];
            foreach ($normalized_matrix as $row) {
                $priority_vector[] = array_sum($row) / count($row);
            }
            return $priority_vector;
        }
        // lambda max
        function calculate_lambda_max($matrix, $priority_vector)
        {
            $weighted_sum_vector = [];
            foreach ($matrix as $row) {
                $weighted_sum = 0;
                foreach ($row as $key => $value) {
                    $weighted_sum += $value * $priority_vector[$key];
                }
                $weighted_sum_vector[] = $weighted_sum;
            }

            $lambda_max = 0;
            foreach ($weighted_sum_vector as $key => $value) {
                $lambda_max += $value / $priority_vector[$key];
            }
            return $lambda_max / count($priority_vector);
        }

        // Nilai RI n = 5
        $RI = 1.12;

        $normalized_matrix = normalize_matrix($pairwise_matrix, $column_sums);

        $priority_vector = calculate_priority_vector($normalized_matrix);

        $lambda_max = calculate_lambda_max($pairwise_matrix, $priority_vector);

        $n = count($pairwise_matrix);
        $CI = ($lambda_max - $n) / ($n - 1);

        $CR = $CI / $RI;

        return [
            'normalized_matrix' => $normalized_matrix,
            'priority_vector' => $priority_vector,
            'lambda_max' => $lambda_max,
            'CI' => $CI,
            'CR' => $CR
        ];
    }

    private function sawCalculate($data, $weights, $criteria_types)
    {
        // Normalisasi matriks keputusan
        $normalized_matrix = [];
        foreach ($data as $row) {
            $normalized_row = [];
            foreach ($row as $key => $value) {
                if ($criteria_types[$key] == 'cost') {
                    $normalized_value = min(array_column($data, $key)) / $value;
                } else {
                    $normalized_value = $value / max(array_column($data, $key));
                }
                $normalized_row[$key] = $normalized_value;
            }
            $normalized_matrix[] = $normalized_row;
        }

        // Hitung skor SAW
        $scores = [];
        foreach ($normalized_matrix as $row) {
            $score = 0;
            foreach ($row as $key => $value) {
                $score += $value * $weights[$key];
            }
            $scores[] = $score;
        }

        return $scores;
    }

    public function calculateAHPandSAW()
    {
        $pairwise_matrix = [
            [1, 0.25, 0.3333333333, 4, 2],
            [4, 1, 2, 5, 3],
            [3, 0.5, 1, 3, 2],
            [0.25, 0.2, 0.3333333333, 1, 0.3333333333],
            [0.5, 0.3333333333, 0.5, 3, 1]
        ];

        $ahp_result = $this->ahpCalculate($pairwise_matrix);
        $priority_vector = $ahp_result['priority_vector'];

        $current_month = Carbon::now()->month;
        $data_records = AjuanBansosModel::whereMonth('created_at', $current_month)->get();

        // Convert data 
        $data = [];
        foreach ($data_records as $record) {
            $data[] = [
                'id_kartuKeluarga' => $record->id_kartuKeluarga,
                'status_rumah' => $this->convertStatusRumah($record->status_rumah),
                'tanggungan' => $this->convertTanggungan($record->tanggungan),
                'penghasilan_keluarga' => $this->convertPenghasilanKeluarga($record->penghasilan_keluarga),
                'luas_tempat_tinggal' => $this->convertLuasTempatTinggal($record->luas_tempat_tinggal),
                'pengeluaran_listrik' => $this->convertPengeluaranListrik($record->pengeluaran_listrik)
            ];
        }

        $criteria_data = array_map(function ($item) {
            return [
                $item['status_rumah'],
                $item['tanggungan'],
                $item['penghasilan_keluarga'],
                $item['luas_tempat_tinggal'],
                $item['pengeluaran_listrik']
            ];
        }, $data);

        // Criteria
        $criteria_types = ['cost', 'benefit', 'cost', 'cost', 'cost'];

        $saw_scores = $this->sawCalculate($criteria_data, $priority_vector, $criteria_types);

        // Combine data 
        $results = [];
        foreach ($data as $key => $row) {
            $results[] = [
                // 'id_kartuKeluarga' => $row['id_kartuKeluarga'],
                'data' => $row,
                'score' => $saw_scores[$key]
            ];
        }

        usort($results, function ($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        // ranking results
        foreach ($results as $key => &$result) {
            $result['rank'] = $key + 1;
        }

        return response()->json([
            'ahp_result' => $ahp_result,
            'saw_scores' => $results
        ]);
    }

    private function convertStatusRumah($value)
    {
        $conversion = [
            'Kontrak/kos' => 3,
            'Tinggal dengan keluarga' => 2,
            'Milik sendiri' => 1
        ];
        return $conversion[$value];
    }

    private function convertTanggungan($value)
    {
        $conversion = [
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
            '>5' => 6
        ];
        return $conversion[$value];
    }

    private function convertPenghasilanKeluarga($value)
    {
        $conversion = [
            '<1.000.000' => 6,
            '1.000.000 - 2.000.000' => 5,
            '2.000.000 - 3.000.000' => 4,
            '3.000.000 - 4.000.000' => 3,
            '4.000.000 - 5.000.000' => 2,
            '>5.000.000' => 1
        ];
        return $conversion[$value];
    }

    private function convertLuasTempatTinggal($value)
    {
        $conversion = [
            '<20m' => 5,
            '20m - 40m' => 4,
            '40m - 60m' => 3,
            '60m - 80m' => 2,
            '>80m' => 1
        ];
        return $conversion[$value];
    }

    private function convertPengeluaranListrik($value)
    {
        $conversion = [
            '<50.000' => 5,
            '50.000 - 100.000' => 4,
            '100.000 - 200.000' => 3,
            '200.000 - 300.000' => 2,
            '>300.000' => 1
        ];
        return $conversion[$value];
    }

}