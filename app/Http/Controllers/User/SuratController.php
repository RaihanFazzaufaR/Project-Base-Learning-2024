<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermintaanSuratModel;

class SuratController extends Controller
{     
    public function index()
    {
        $menu = 'Surat';
        // return view('Surat.formSK', compact('menu'));
        return view('Surat.formSKPindah', compact('menu'));
        // return view('Surat.formSKkematian', compact('menu'));
    }
    public function formSK(Request $request){
        redirect()->route('sk-pindah');
    }
    public function skPindah()
    {
        $menu = 'Surat';
        // return view('Surat.formSK', compact('menu'));
        return view('Surat.surat_keterangan_pindah', compact('menu'));
        // return view('Surat.formSKkematian', compact('menu'));
    }
    
    public function suratku()
    {
        $menu = 'Surat';
        $permintaanSurat = PermintaanSuratModel::select('tb_permintaansurat.*', 'tb_penduduk.nama', 'tb_template.jenisSurat')
        ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->join('tb_template', 'tb_permintaansurat.template_id', '=', 'tb_template.template_id')
        // ->where('tb_permintaansurat.status', 'menunggu') // Hanya data dengan status 'menunggu'
        ->orderBy('tb_permintaansurat.minta_tanggal', 'desc') // Urutkan berdasarkan tanggal terbaru
        ->paginate(10);

        return view('Surat.surat-ku', compact('permintaanSurat','menu'));
        // // return view('Surat.formSK', compact('menu'));
        // return view('Surat.surat-ku', compact('menu'));
        // // return view('Surat.formSKkematian', compact('menu'));
    }
}
