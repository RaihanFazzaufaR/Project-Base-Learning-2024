<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AduanModel;
use App\Models\JadwalModel;
use App\Models\KartuKeluargaModel;
use App\Models\PendudukModel;
use App\Models\UmkmModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id');

        $page = 'dashboard';
        $selected = 'Dashboard';

        $jumlahKK = KartuKeluargaModel::count();
        $jumlahPenduduk = PendudukModel::count();
        $jumlahUmkm = UmkmModel::count();
        $jumlahAduan = AduanModel::count();

        $dataJumlah = [
            'jumlahKK' => $jumlahKK,
            'jumlahPenduduk' => $jumlahPenduduk,
            'jumlahUmkm' => $jumlahUmkm,
            'jumlahAduan' => $jumlahAduan,
        ];

        $dataStatusPenduduk = [
            'tetap' => PendudukModel::where('statusPenduduk', 'penduduk tetap')->count(),
            'tidak tetap' => PendudukModel::where('statusPenduduk', 'penduduk tidak tetap')->count(),
        ];

        $dataPendudukAll = PendudukModel::all();
        $dataPendudukAll = $this->countAge($dataPendudukAll);

        $dataDemografiPenduduk = [
            'kategori1L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 0)->where('usia', '<=', 5)->count(),
            'kategori1P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 0)->where('usia', '<=', 5)->count(),
            'kategori2L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 6)->where('usia', '<=', 12)->count(),
            'kategori2P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 6)->where('usia', '<=', 12)->count(),
            'kategori3L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 13)->where('usia', '<=', 25)->count(),
            'kategori3P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 13)->where('usia', '<=', 25)->count(),
            'kategori4L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 26)->where('usia', '<=', 45)->count(),
            'kategori4P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 26)->where('usia', '<=', 45)->count(),
            'kategori5L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 46)->count(),
            'kategori5P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 46)->count(),
        ];


        $newestUmkm = UmkmModel::latest()
            ->where('status', 'diterima')
            ->limit(5)
            ->get();
        $newestUmkm = $this->formatDateAndTime($newestUmkm);


        $dataKegiatanMendatang = JadwalModel::where('mulai_tanggal', '>', date('Y-m-d'))
            ->where('status', 'selesai')
            ->orderBy('mulai_tanggal', 'asc')
            ->get();

        $dataKegiatanMendatang = $this->formatDateAndTime($dataKegiatanMendatang);

        // $calendarDatePrev = $request->session()->has('date') ? $request->session()->get('date') : '';
        // $calendarDate = $request->filled('date') ? $request->date : date('Y-m-d');

        // $dataToday = JadwalModel::where('status', 'selesai')
        //     ->where('mulai_tanggal', '<=', $calendarDate)
        //     ->where('akhir_tanggal', '>=', $calendarDate)
        //     ->orderBy('mulai_waktu', 'asc')
        //     ->get();

        // foreach ($dataToday as $dt) {
        //     $dt->dateNow = Carbon::parse($calendarDate)->diffInDays(Carbon::parse($dt->mulai_tanggal)) + 1;
        // }

        // $dateFormat = Carbon::parse($calendarDate)->translatedFormat('d F Y');
        // $dataToday = $this->formatDateAndTime($dataToday);

        $dataDate = JadwalModel::select(
            DB::raw('mulai_tanggal as dateStart'),
            DB::raw('YEAR(mulai_tanggal) as yearStart'),
            DB::raw('(MONTH(mulai_tanggal)-1) as monthStart'),
            DB::raw('DAY(mulai_tanggal) as dayStart'),
            DB::raw('akhir_tanggal as dateEnd'),
            DB::raw('YEAR(akhir_tanggal) as yearEnd'),
            DB::raw('(MONTH(akhir_tanggal)-1) as monthEnd'),
            DB::raw('DAY(akhir_tanggal) as dayEnd')
        )
            ->where('status', 'selesai')
            ->get();

        // $dataArray = [
        //     'dataUpcoming' => $dataUpcoming,
        //     'dataToday' => $dataToday,
        //     'dataDate' => $dataDate,
        // ];

        return view('Admin.index', compact('page', 'selected', 'dataJumlah', 'dataStatusPenduduk', 'dataDemografiPenduduk', 'newestUmkm', 'dataKegiatanMendatang', 'dataDate'));
    }

    private function countAge($data)
    {
        foreach ($data as $dt) {
            $dt->usia = Carbon::parse($dt->tanggalLahir)->age;
        }
        return $data;
    }

    private function formatDateAndTime($data)
    {
        foreach ($data as $key => $value) {
            // count dif days
            $value->diffDays = Carbon::parse($value->akhir_tanggal)->diffInDays(Carbon::parse($value->mulai_tanggal));

            // tb_jadwal
            $value->mulai_waktu = Carbon::parse($value->mulai_waktu)->format('H:i');
            $value->akhir_waktu = Carbon::parse($value->akhir_waktu)->format('H:i');

            $value->tgl_mulai = $value->mulai_tanggal;
            $value->mulai_tanggal = Carbon::parse($value->mulai_tanggal)->translatedFormat('d M');
            $value->tgl_akhir = $value->akhir_tanggal;
            $value->akhir_tanggal = Carbon::parse($value->akhir_tanggal)->translatedFormat('d M');

            // tb_umkm
            $value->buka_waktu = Carbon::parse($value->buka_waktu)->format('H:i');
            $value->tutup_waktu = Carbon::parse($value->tutup_waktu)->format('H:i');
        }

        return $data; // Mengembalikan data yang telah diformat
    }
}
