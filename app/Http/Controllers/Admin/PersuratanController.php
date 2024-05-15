<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use App\Models\PermintaanSuratModel;
use Illuminate\Http\Request;

class PersuratanController extends Controller
{
    public function index()
    {
        $page = 'daftarPersuratan';
        $selected = 'Persuratan';

    
        $permintaanSurat = PermintaanSuratModel::select('tb_permintaansurat.*', 'tb_penduduk.nama', 'tb_template.jenisSurat')
        ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->join('tb_template', 'tb_permintaansurat.template_id', '=', 'tb_template.template_id')
        // ->where('tb_permintaansurat.status', 'menunggu') // Hanya data dengan status 'menunggu'
        ->orderBy('tb_permintaansurat.minta_tanggal', 'desc') // Urutkan berdasarkan tanggal terbaru
        ->paginate(10);

        return view('admin.persuratan.index', compact('permintaanSurat', 'page', 'selected'));
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
        return view('admin.persuratan.ajuanSurat', compact('permintaanSurat', 'page', 'selected'));
    }
    
    public function templateSurat()
    {
        $page = 'templateSurat';
        $selected = 'Persuratan';

        $user = PendudukModel::paginate(10);

        return view('admin.persuratan.templateSurat', compact('user', 'page', 'selected'));
    }
}
