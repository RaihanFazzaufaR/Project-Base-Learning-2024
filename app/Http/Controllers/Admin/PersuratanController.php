<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use App\Models\PermintaanSuratModel;
use App\Models\SuratModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\PindahPendudukModel;

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

    public function showDetail($pemintaId, $templateId)
    {
        // Retrieve the requested Surat
        $surat = DB::table('tb_surat')
            ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
            ->select('tb_surat.*', 'tb_penduduk.nama', 'tb_penduduk.tanggalLahir')
            ->where('tb_surat.peminta_id', $pemintaId)
            ->where('tb_surat.template_id', $templateId)
            ->first();

        // If surat not found, redirect back with error
        if (!$surat) {
            return redirect()->back()->withErrors(['error' => 'Surat tidak ditemukan.']);
        }

        // Common processing
        $surat->tanggalLahir = Carbon::parse($surat->tanggalLahir);

        // Additional processing for Surat Keterangan Kematian
        if (isset($surat->tanggal_wafat)) {
            $tanggalLahir = Carbon::parse($surat->tanggalLahir);
            $usia = $tanggalLahir->diffInYears(Carbon::now());
            $surat->tanggal_wafat = Carbon::parse($surat->tanggal_wafat);
            $surat->usia = $usia;
        }

        // Additional processing for Surat Keterangan Pindah
        $data = [];
        if (isset($surat->alamat_pindah) && isset($surat->alasan_pindah) && isset($surat->jumlah_keluarga_pindah)) {
            $data = PindahPendudukModel::where('id_kartuKeluarga', $surat->id_kartuKeluarga)->get();
        }

        // Determine the appropriate view to return based on available data
        if (isset($surat->tanggal_wafat)) {
            return view('Surat.surat_keterangan_kematian', compact('surat'));
        } elseif (!empty($data)) {
            return view('Surat.surat_keterangan_pindah', compact('surat', 'data'));
        } else {
            return view('Surat.surat_keterangan', compact('surat'));
        }
    }
}
