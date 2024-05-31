<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use App\Models\PengumumanModel;
use Illuminate\Http\Request;
use App\Services\TelegramService;

class PengumumanController extends Controller
{
    protected $telegramService;
    public function index(Request $request)
    {
        $page = 'pengumuman';
        $selected = 'Pengumuman';
        $pengumumans = PengumumanModel::query();

        $searchTerm = $request->filled('search') ? $request->search : session('search');
        if ($searchTerm) {
            $searchTerm = '%' . $searchTerm . '%';
            $pengumumans->where('judul', 'like', $searchTerm);
        }

        $users = PendudukModel::join('tb_kartuKeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartuKeluarga.id_kartuKeluarga')
            ->whereIn('jabatan', ['Ketua RT', 'Ketua RW'])
            ->orderBy('jabatan')
            ->orderBy('rt')
            ->get();
        
        $pengumumans = $pengumumans
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10)->withQueryString();

        return view('Admin.Pengumuman.index', compact('pengumumans','users', 'page', 'selected'));
    }

    public function __construct(TelegramService $telegramService)
    {
        $this->telegramService = $telegramService;
    }

    public function sendAnnouncement(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required|not_in:',
            'konten' => 'required',
        ]);

        PengumumanModel::create([
            'judul' => $request->judul,
            'aktivitas_tipe' => $request->kategori,
            'mulai_tanggal' => $request->mulai_tanggal ? $request->mulai_tanggal : null,
            'akhir_tanggal' => $request->akhir_tanggal ? $request->akhir_tanggal : null,
            'mulai_waktu' => $request->mulai_waktu ? $request->mulai_waktu : null,
            'akhir_waktu' => $request->akhir_waktu ? $request->akhir_waktu : null,
            'konten' => $request->konten,
            'pembuat_id_jadwal' => null,
            'pembuat_id_pengumuman' => $request->pembuat_id != "" ? PendudukModel::where('nik', $request->pembuat_id)->value('id_penduduk') : null,
            'iuran' => $request->iuran ? $request->iuran : null,
            'lokasi' => $request->lokasi ? $request->lokasi : null,
        ]);


        $message = $this->formatMessage($request);

        $this->telegramService->sendMessage($message);

        return redirect()->back()->with('success', 'Pengumuman berhasil dikirim');
    }

    private function formatMessage(Request $request)
    {
        $message = "<b>". $request->judul . "</b>\n\n";
        if($request->kategori != null){
        $message .= "Kategori: $request->kategori\n";
        }
        if($request->mulai_tanggal != null) {
            $message .= "Mulai tanggal: $request->mulai_tanggal\n";
        }
        if($request->akhir_tanggal != null){
            $message .= "Selesai tanggal: $request->akhir_tanggal\n";
        }
        if($request->mulai_waktu != null){
            $message .= "Mulai waktu: $request->mulai_waktu\n";
        }
        if($request->akhir_waktu != null){
            $message .= "Selesai waktu: $request->akhir_waktu\n";
        }
        if($request->iuran != null){
            $message .= "Iuran: $request->iuran\n";
        }
        if($request->lokasi != null){
            $message .= "Lokasi: $request->lokasi\n";
        }
        $message .= "$request->konten\n";

        return $message;
    }
}
