<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use App\Models\PermintaanSuratModel;
use App\Models\SuratModel;
use Illuminate\Http\Request;

class PersuratanController extends Controller
{
    public function index()
    {
        $page = 'daftarPersuratan';
        $selected = 'Persuratan';
    
        $dataSurat = SuratModel::select('tb_surat.*', 'tb_penduduk.nama')
        ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->orderBy('tb_surat.minta_tanggal', 'desc')
        ->paginate(10);   

        return view('Admin.Persuratan.index', compact('dataSurat', 'page', 'selected'));
    }
    public function ajuanPersuratan()
    {
        $page = 'ajuanPersuratan';
        $selected = 'Persuratan';
    
        $permintaanSurat = PermintaanSuratModel::select('tb_permintaansurat.*', 'tb_penduduk.nama', 'tb_template.jenisSurat')
        ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->join('tb_template', 'tb_permintaansurat.template_id', '=', 'tb_template.template_id')
        // ->where('tb_permintaansurat.status', 'menunggu') 
        ->orderBy('tb_permintaansurat.minta_tanggal', 'desc') 
        ->paginate(10);

        // Return the view and pass the $permintaanSurat data, along with $page and $selected variables
        return view('Admin.Persuratan.ajuanSurat', compact('permintaanSurat', 'page', 'selected'));
    }
    
    public function templateSurat()
    {
        $page = 'templateSurat';
        $selected = 'Persuratan';

        $user = PendudukModel::paginate(10);

        return view('Admin.Persuratan.templateSurat', compact('user', 'page', 'selected'));
    }
}
