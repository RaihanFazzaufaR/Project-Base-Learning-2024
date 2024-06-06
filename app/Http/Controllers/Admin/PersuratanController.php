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

        foreach($dataSurat as $surat) {
            if($surat->template_id == 3){
                $surat->nama_wafat = PendudukModel::where('nik', $surat->nik)->first()->nama;
            }
        }

        return view('Admin.Persuratan.index', compact('dataSurat', 'page', 'selected'));
    }

    public function search(Request $request)
    {
        $page = 'daftarPersuratan';
        $selected = 'Persuratan';
    
        // Ambil nilai pencarian dari input
        $search = $request->input('search');
    
        // Jika input pencarian kosong, tampilkan semua data
        if (empty($search)) {
            $dataSurat = SuratModel::select('tb_surat.*', 'tb_penduduk.nama')
                ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
                ->orderBy('tb_surat.minta_tanggal', 'desc')
                ->paginate(10)
                ->withQueryString();
        } else {
            // Check if the search query contains keywords related to different template_ids
            if (strpos(strtolower($search), 'keterangan') !== false) {
                $templateId = 1;
            } elseif (strpos(strtolower($search), 'pindah') !== false) {
                $templateId = 2;
            } elseif (strpos(strtolower($search), 'kematian') !== false) {
                $templateId = 3;
            } else {
                $templateId = null; // If no specific keyword found, set templateId to null
            }
    
            // Build the query based on the search keyword
            $query = SuratModel::select('tb_surat.*', 'tb_penduduk.nama')
                ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk');
    
            if (!is_null($templateId)) {
                $query->where('tb_surat.template_id', $templateId);
            } else {
                $query->where('tb_penduduk.nama', 'LIKE', "%{$search}%")
                    ->orWhereDate('tb_surat.minta_tanggal', $search);
            }
    
            $dataSurat = $query->orderBy('tb_surat.minta_tanggal', 'desc')
                ->paginate(10)
                ->withQueryString();
        }
    
        $dataSurat->getCollection()->transform(function ($item) {
            if ($item->peminta) {
                $item->nama = $item->peminta->nama;
            } else {
                $item->nama = null;
            }
            return $item;
        });
    
        return view('Admin.Persuratan.index', compact('dataSurat', 'page', 'selected'));
    }
    
    public function filter(Request $request)
    {
        $page = 'daftarPersuratan';
        $selected = 'Persuratan';
    
        // Ambil nilai jenis surat dari input
        $jenisSurat = $request->input('jenis-surat');
    
        // Build the query based on the selected jenis surat
        $query = SuratModel::select('tb_surat.*', 'tb_penduduk.nama')
            ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk');
    
        if (!empty($jenisSurat)) {
            // Jika dipilih jenis surat tertentu, sesuaikan filter berdasarkan template_id
            $query->where('tb_surat.template_id', $jenisSurat);
        }
    
        // Lakukan pengurutan dan paginasi data
        $dataSurat = $query->orderBy('tb_surat.minta_tanggal', 'desc')
            ->paginate(10)
            ->withQueryString();
    
        // Transformasi data jika diperlukan
        $dataSurat->getCollection()->transform(function ($item) {
            if ($item->peminta) {
                $item->nama = $item->peminta->nama;
            } else {
                $item->nama = null;
            }
            return $item;
        });
    
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
