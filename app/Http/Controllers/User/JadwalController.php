<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\JadwalModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        Carbon::setLocale('id');
        $menu = 'Kegiatan';
        $kategoriDataPast = 'Umum';

        $dataUpcoming = JadwalModel::where('mulai_tanggal', '>', date('Y-m-d'))
            ->where('status', 'selesai')
            ->limit(3)
            ->get();

        // Memanggil dan memformat data menggunakan fungsi formatDate
        $dataUpcoming = $this->formatDateAndTime($dataUpcoming);

        $calendarDate = ($request->filled('date')) ? $request->date : date('Y-m-d');

        $dataToday = JadwalModel::where('mulai_tanggal', '=', $calendarDate)
            // $dataToday = JadwalModel::where('mulai_tanggal', '=', date('2024-04-25'))
            ->where('status', 'selesai')
            ->orderBy('mulai_waktu', 'asc')
            ->get();

        $dataToday = $this->formatDateAndTime($dataToday);

        $dataPast = JadwalModel::where('mulai_tanggal', '<', date('Y-m-d'))
            ->where('status', 'selesai')
            ->orderBy('mulai_tanggal', 'desc')
            ->limit(6)
            ->get();

        $dataDate = JadwalModel::select(
            DB::raw('mulai_tanggal as date'),
            DB::raw('YEAR(mulai_tanggal) as year'),
            DB::raw('(MONTH(mulai_tanggal)-1) as month'),
            DB::raw('DAY(mulai_tanggal) as day')
        )
            ->where('status', 'selesai')
            ->get();

        // dd($dataDate->toArray());
        // dd(isset($dataToday->array));

        // $dataPast = $dataPast->where('aktivitas_tipe', '=', 'Lingkungan');
        // Memanggil dan memformat data menggunakan fungsi formatDate
        $dataPast = $this->formatDateAndTime($dataPast);

        return view('jadwal.index', compact('menu', 'dataUpcoming', 'dataToday', 'dataPast', 'kategoriDataPast', 'dataDate'));
    }

    // Mengubah fungsi formatDate menjadi public agar dapat diakses dari luar kelas
    public function formatDateAndTime($data)
    {
        foreach ($data as $key => $value) {
            $value->mulai_tanggal = Carbon::parse($value->mulai_tanggal)->translatedFormat('d F Y');
            $value->akhir_tanggal = Carbon::parse($value->akhir_tanggal)->translatedFormat('d F Y');
            $value->mulai_waktu = Carbon::parse($value->mulai_waktu)->format('H:i');
            $value->akhir_waktu = Carbon::parse($value->akhir_waktu)->format('H:i');
        }

        return $data; // Mengembalikan data yang telah diformat
    }
}
