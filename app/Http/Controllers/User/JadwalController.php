<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\JadwalModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        Carbon::setLocale('id');
        $menu = 'Kegiatan';
        $kategoriDataPast = 'umum';

        $dataUpcoming = JadwalModel::where('mulai_tanggal', '>', date('Y-m-d'))
            ->where('status', 'selesai')
            ->limit(3)
            ->get();

        // Memanggil dan memformat data menggunakan fungsi formatDate
        $dataUpcoming = $this->formatDateAndTime($dataUpcoming);

        $dataPast = JadwalModel::where('mulai_tanggal', '<', date('Y-m-d'))
            ->where('status', 'selesai')
            ->orderBy('mulai_tanggal', 'desc')
            ->limit(6)
            ->get();

        if ($)
        // $dataPast = $dataPast->where('aktivitas_tipe', '=', 'Lingkungan');
        // Memanggil dan memformat data menggunakan fungsi formatDate
        $dataPast = $this->formatDateAndTime($dataPast);

        return view('jadwal.index', compact('menu', 'dataUpcoming', 'dataPast')); // Mengirimkan data yang telah diformat ke view
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
