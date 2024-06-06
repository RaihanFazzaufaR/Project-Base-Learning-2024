<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BansosModel;
use App\Models\KartuKeluargaModel;
use App\Models\AjuanBansosModel;
use App\Models\PendudukModel;
use App\Models\RekomendasiPenerimaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BansosController extends Controller
{
    public function index()
    {
        $page = 'listBansos';
        $selected = 'Bansos';

        // get month
        $month = [];

        for ($m = 1; $m <= 12; $m++) {
            $month[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
        }

        // get years
        $years = [
            'before' => Carbon::now()->subYear()->year,
            'now' => Carbon::now()->year,
            'next' => Carbon::now()->addYear()->year,
        ];
        $current_month = Carbon::now()->month;
        $data_records = AjuanBansosModel::whereMonth('tb_ajuan_bansos.created_at', $current_month)
            ->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->join('tb_penduduk', 'tb_kartukeluarga.kepalaKeluarga', '=', 'tb_penduduk.nik')
            ->where('tb_ajuan_bansos.status', 'diterima')
            ->select('tb_ajuan_bansos.*', 'tb_kartukeluarga.niKeluarga', 'tb_kartukeluarga.rt', 'tb_penduduk.nama')
            ->paginate(10)
            ->map(function ($record) {
                $record->created_at_text = $record->created_at->format('F Y');
                return $record;
            });
        // return $data_records;

        return view('Admin.Bansos.index', compact('page', 'selected', 'month', 'years', 'data_records'));
    }

    public function rekomendasiBansos()
    {
        $page = 'rekomendasiBansos';
        $selected = 'Bansos';

        $user = AjuanBansosModel::paginate(10)->withQueryString();

        $month = [];

        for ($m = 1; $m <= 12; $m++) {
            $month[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
        }

        // get years
        $years = [
            'before' => Carbon::now()->subYear()->year,
            'now' => Carbon::now()->year,
            'next' => Carbon::now()->addYear()->year,
        ];

        return view('Admin.Bansos.rekomendasi-bansos', compact('user', 'page', 'selected', 'month', 'years'));
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
        $page = 'rekomendasiBansos';
        $selected = 'Bansos';
        $month = [];
        for ($m = 1; $m <= 12; $m++) {
            $month[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
        }
        $years = [
            'before' => Carbon::now()->subYear()->year,
            'now' => Carbon::now()->year,
            'next' => Carbon::now()->addYear()->year,
        ];
        $id_RT = Auth::user()->penduduk->id_penduduk;
        // return $id_RT;
        $id_kartuKeluarga = PendudukModel::where('id_penduduk', $id_RT)->value('id_kartuKeluarga');
        $RT = KartuKeluargaModel::where('id_kartuKeluarga', $id_kartuKeluarga)->value('rt');

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
        $current_year = Carbon::now()->year;
        $data_records = AjuanBansosModel::whereMonth('tb_ajuan_bansos.created_at', $current_month)
            ->whereYear('tb_ajuan_bansos.created_at', '>=', $current_year)
            ->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->join('tb_penduduk', 'tb_kartukeluarga.kepalaKeluarga', '=', 'tb_penduduk.nik')
            ->where('tb_kartukeluarga.rt', $RT)
            ->where('tb_ajuan_bansos.status', 'diproses')
            ->select('tb_ajuan_bansos.*', 'tb_kartukeluarga.*', 'tb_penduduk.nama')
            ->get();

        // dd($data_records);

        // Convert data 
        $data = [];
        foreach ($data_records as $record) {
            $data[] = [
                'id_ajuanBansos' => $record->id_ajuanBansos,
                'id_kartuKeluarga' => $record->id_kartuKeluarga,
                'niKeluarga' => $record->niKeluarga,
                'created_at' => Carbon::parse($record->created_at)->format('d-m-Y'),
                'nama_kepala_keluarga' => $record->nama,
                'status' => $record->status,
                'foto_rumah' => $record->foto_rumah,
                'SKTM' => $record->SKTM,
                'status_rumah' => [
                    'original' => $record->status_rumah,
                    'converted' => $this->convertStatusRumah($record->status_rumah)
                ],
                'tanggungan' => [
                    'original' => $record->tanggungan,
                    'converted' => $this->convertTanggungan($record->tanggungan)
                ],
                'penghasilan_keluarga' => [
                    'original' => $record->penghasilan_keluarga,
                    'converted' => $this->convertPenghasilanKeluarga($record->penghasilan_keluarga)
                ],
                'luas_tempat_tinggal' => [
                    'original' => $record->luas_tempat_tinggal,
                    'converted' => $this->convertLuasTempatTinggal($record->luas_tempat_tinggal)
                ],
                'pengeluaran_listrik' => [
                    'original' => $record->pengeluaran_listrik,
                    'converted' => $this->convertPengeluaranListrik($record->pengeluaran_listrik)
                ],
            ];
        }

        $criteria_data = array_map(function ($item) {
            return [
                $item['status_rumah']['converted'],
                $item['tanggungan']['converted'],
                $item['penghasilan_keluarga']['converted'],
                $item['luas_tempat_tinggal']['converted'],
                $item['pengeluaran_listrik']['converted']
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

        // return ['ahp_result' => $ahp_result, 'saw_scores' => $results];
        return view('Admin.Bansos.rekomendasi-bansos', compact('page', 'selected', 'ahp_result', 'results', 'month', 'years'));
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

    public function acceptBansos(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:tb_ajuan_bansos,id_ajuanBansos'
        ]);

        $id_ajuanBansos = $request->input('id');
        AjuanBansosModel::where('id_ajuanBansos', $id_ajuanBansos)
            ->update(['status' => 'diterima']);

        return redirect()->back()->with('success', 'Berhasil diterima.');
    }

    public function rejectBansos(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:tb_ajuan_bansos,id_ajuanBansos'
        ]);

        $id_ajuanBansos = $request->input('id');
        AjuanBansosModel::where('id_ajuanBansos', $id_ajuanBansos)
            ->update(['status' => 'ditolak']);

        return redirect()->back()->with('error', 'Berhasilditolak.');
    }
    public function searchBansos(Request $request)
    {
        $page = 'listBansos';
        $selected = 'Bansos';

        $month = [];

        for ($m = 1; $m <= 12; $m++) {
            $month[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
        }

        $years = [
            'before' => Carbon::now()->subYear()->year,
            'now' => Carbon::now()->year,
            'next' => Carbon::now()->addYear()->year,
        ];
        $current_month = Carbon::now()->month;
        $searchTerm = $request->input('search');
        // return $searchTerm;
        $data_records = AjuanBansosModel::whereMonth('tb_ajuan_bansos.created_at', $current_month)
            ->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->join('tb_penduduk', 'tb_kartukeluarga.kepalaKeluarga', '=', 'tb_penduduk.nik')
            ->where('tb_ajuan_bansos.status', 'diterima')
            ->where(function ($query) use ($searchTerm) {
                $query->where('tb_penduduk.nama', 'like', '%' . $searchTerm . '%')
                    ->orWhere('tb_kartukeluarga.niKeluarga', 'like', '%' . $searchTerm . '%')
                    ->orWhere('tb_kartukeluarga.rt', 'like', '%' . $searchTerm . '%');
            })
            ->select('tb_ajuan_bansos.*', 'tb_kartukeluarga.niKeluarga', 'tb_kartukeluarga.rt', 'tb_penduduk.nama')
            ->get()
            ->map(function ($record) {
                $record->created_at_text = $record->created_at->format('F Y');
                return $record;
            });
        ;

        // return $data_records;
        return view('Admin.Bansos.index', compact('page', 'selected', 'month', 'years', 'data_records'));
    }

    public function filterBansos(Request $request)
    {
        $page = 'listBansos';
        $selected = 'Bansos';

        $month = [];

        for ($m = 1; $m <= 12; $m++) {
            $month[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
        }

        $years = [
            'before' => Carbon::now()->subYear()->year,
            'now' => Carbon::now()->year,
            'next' => Carbon::now()->addYear()->year,
        ];
        $bulan = $request->input('bulan', Carbon::now()->format('m'));
        $tahun = $request->input('tahun', Carbon::now()->format('Y'));
        $rt = $request->input('rt');
        // return $request->all();
        $query = AjuanBansosModel::join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->join('tb_penduduk', 'tb_kartukeluarga.kepalaKeluarga', '=', 'tb_penduduk.nik')
            ->where('tb_ajuan_bansos.status', 'diproses')
            ->select('tb_ajuan_bansos.*', 'tb_kartukeluarga.*', 'tb_penduduk.nama');

        if ($bulan) {
            $query->whereMonth('tb_ajuan_bansos.created_at', $bulan);
        }

        if ($tahun) {
            $query->whereYear('tb_ajuan_bansos.created_at', $tahun);
        }

        if ($rt) {
            $query->where('tb_kartukeluarga.rt', $rt);
        }

        $data_records = $query->get();

        // return $data_records;
        return view('Admin.Bansos.index', compact('page', 'selected', 'month', 'years', 'data_records'));
    }


}