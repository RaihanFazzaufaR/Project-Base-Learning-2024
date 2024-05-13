<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use App\Models\KartuKeluargaModel;
use Illuminate\Support\Facades\DB;



class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $menu = 'Penduduk';

        $query = DB::table('tb_penduduk')
            ->select(
                DB::raw("CONCAT(SUBSTRING(tb_penduduk.nik, 1, 4), '**********', SUBSTRING(tb_penduduk.nik, -2)) AS nik"), // Menggabungkan substring pertama, asterisk, dan substring terakhir, // Mengganti 6 digit terakhir dengan 'XXXXXX'
                'tb_penduduk.nama',
                'tb_penduduk.statusPenduduk',
                'kk.rt',
                'kk.alamat'
            )
            ->join('tb_kartukeluarga as kk', 'tb_penduduk.id_kartuKeluarga', '=', 'kk.id_kartuKeluarga');


        $rts = DB::table('tb_kartukeluarga')->select('rt')->distinct()->pluck('rt');


        if ($request->has('filterRT')) {
            $query->where('kk.rt', $request->filterRT);
        }

        $penduduks = $query->paginate(10);

        return view('penduduk.index', compact('menu', 'penduduks', 'rts'));
    }

    public function getDataByRT($rt)
    {
        $query = DB::table('tb_penduduk')
        ->select(
            DB::raw("CONCAT(SUBSTRING(tb_penduduk.nik, 1, 4), '**********', SUBSTRING(tb_penduduk.nik, -2)) AS nik"), 
            'tb_penduduk.nama',
            'tb_penduduk.statusPenduduk',
            'kk.rt',
            'kk.alamat'
        )
        ->join('tb_kartukeluarga as kk', 'tb_penduduk.id_kartuKeluarga', '=', 'kk.id_kartuKeluarga')
        ->where('kk.rt', $rt);

        $rts = DB::table('tb_kartukeluarga')->select('rt')->distinct()->pluck('rt');

        $menu = 'Penduduk';
        $penduduks = $query->paginate(10);
        return view('penduduk.index', compact('menu', 'rts', 'penduduks'));
    }
    
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $menu = 'Penduduk';
        
        $query = DB::table('tb_penduduk')
            ->select(
                DB::raw("CONCAT(SUBSTRING(tb_penduduk.nik, 1, 4), '**********', SUBSTRING(tb_penduduk.nik, -2)) AS nik"),
                'tb_penduduk.nama',
                'tb_penduduk.statusPenduduk',
                'kk.rt',
                'kk.alamat'
            )
            ->join('tb_kartukeluarga as kk', 'tb_penduduk.id_kartuKeluarga', '=', 'kk.id_kartuKeluarga')
            ->where('tb_penduduk.nama', 'LIKE', "%{$searchTerm}%");
        
        $penduduks = $query->paginate(10);
        
        $notification = $penduduks->isEmpty() ? 'Data Tidak Ditemukan' : null;
        
        return view('penduduk.index', compact('menu', 'penduduks', 'notification'));
    }
}