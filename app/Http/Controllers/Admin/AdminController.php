<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AduanModel;
use App\Models\KartuKeluargaModel;
use App\Models\PendudukModel;
use App\Models\UmkmModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $page = 'dashboard';
        $selected = 'Dashboard';
        $jumlahKK = KartuKeluargaModel::count();
        $jumlahPenduduk = PendudukModel::count();
        $jumlahUmkm = UmkmModel::count();
        $jumlahAduan = AduanModel::count();

        $dataStatusPenduduk = [
            'tetap' => PendudukModel::where('statusPenduduk', 'penduduk tetap')->count(),
            'tidak tetap' => PendudukModel::where('statusPenduduk', 'penduduk tidak tetap')->count(),
        ];

        $dataPendudukAll = PendudukModel::all();
        $dataPendudukAll = $this->countAge($dataPendudukAll);

        // dd($dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 0)->where('usia', '<=', 5)->count());

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
        
        $dataJumlah = [
            'jumlahKK' => $jumlahKK,
            'jumlahPenduduk' => $jumlahPenduduk,
            'jumlahUmkm' => $jumlahUmkm,
            'jumlahAduan' => $jumlahAduan,
        ];        

        return view('admin.index', compact('page', 'selected', 'dataJumlah', 'dataStatusPenduduk', 'dataDemografiPenduduk'));
    }

    private function countAge($data) {
        foreach ($data as $dt) {
            $dt->usia = Carbon::parse($dt->tanggalLahir)->age;
        }
        return $data;  
    }
}
