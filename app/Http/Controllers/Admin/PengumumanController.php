<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use App\Models\PengumumanModel;
use App\Models\JadwalModel;
use Illuminate\Http\Request;
use App\Services\TelegramService;
use Carbon\Carbon;

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

        $users = PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartukeluarga', '=', 'tb_kartukeluarga.id_kartukeluarga')
            ->whereIn('jabatan', ['Ketua RT', 'Ketua RW'])
            ->orWhere('id_penduduk', '1')
            ->orderBy('jabatan')
            ->orderBy('rt')
            ->get();

        $pengumumans = $pengumumans
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10)->withQueryString();

        foreach ($pengumumans as $pengumuman) {
            $pengumuman->pembuat = PendudukModel::where('id_penduduk', $pengumuman->pembuat_id_pengumuman)->first();
        }

        return view('Admin.Pengumuman.index', compact('pengumumans', 'users', 'page', 'selected'));
    }

    public function __construct(TelegramService $telegramService)
    {
        $this->telegramService = $telegramService;
    }

    public function tambahPengumuman(Request $request)
    {
        $now = Carbon::now()->startOfDay();
        $sevenDayFromNow = Carbon::now()->copy()->addDays(7);

        $request->validate([
            'judul' => 'required',
            'kategori' => 'required|not_in:',
            'konten' => 'required',
        ]);

        $pengumuman = PengumumanModel::create([
            'judul' => $request->judul,
            'aktivitas_tipe' => $request->kategori,
            'mulai_tanggal' => $request->mulai_tanggal ? $request->mulai_tanggal : null,
            'akhir_tanggal' => $request->akhir_tanggal ? $request->akhir_tanggal : null,
            'mulai_waktu' => $request->mulai_waktu ? $request->mulai_waktu : null,
            'akhir_waktu' => $request->akhir_waktu ? $request->akhir_waktu : null,
            'konten' => $request->konten,
            'jadwal_id' => $request->jadwal_id ? $request->jadwal_id : null,
            'pembuat_id_pengumuman' => $request->pembuat_id ? PendudukModel::where('nik', $request->pembuat_id)->value('id_penduduk') : null,
            'iuran' => $request->iuran ? $request->iuran : null,
            'lokasi' => $request->lokasi ? $request->lokasi : null,
        ]);

        if (!$request->mulai_tanggal) {
            $message = $this->formatMessage($request);
            $this->telegramService->sendMessage($message);

            $pengumuman->update([
                'sent_at' => $now
            ]);
        }

        if (($request->mulai_tanggal >= $now) && ($request->mulai_tanggal <= $sevenDayFromNow)) {
            $message = $this->formatMessage($request);
            $this->telegramService->sendMessage($message);

            $pengumuman->update([
                'sent_at' => $now
            ]);
        }

        return redirect()->back()->with('success', 'Pengumuman berhasil ditambah');
    }

    public function updatePengumuman(Request $request, $id){
        $now = Carbon::now()->startOfDay();
        $sevenDayFromNow = Carbon::now()->copy()->addDays(7);

        $request->validate([
            'judul' => 'required',
            'kategori' => 'required|not_in:',
            'konten' => 'required',
        ]);

        PengumumanModel::find($id)->update([
            'judul' => $request->judul,
            'aktivitas_tipe' => $request->kategori,
            'mulai_tanggal' => $request->mulai_tanggal ? $request->mulai_tanggal : null,
            'akhir_tanggal' => $request->akhir_tanggal ? $request->akhir_tanggal : null,
            'mulai_waktu' => $request->mulai_waktu ? $request->mulai_waktu : null,
            'akhir_waktu' => $request->akhir_waktu ? $request->akhir_waktu : null,
            'konten' => $request->konten,
            'jadwal_id' => $request->jadwal_id ? $request->jadwal_id : null,
            'pembuat_id_pengumuman' => $request->pembuat_id ? PendudukModel::where('nik', $request->pembuat_id)->value('id_penduduk') : null,
            'iuran' => $request->iuran ? $request->iuran : null,
            'lokasi' => $request->lokasi ? $request->lokasi : null,
        ]);

        $pengumuman = PengumumanModel::where('pengumuman_id', $id)->get()->first();

        if($pengumuman->sent_at != null){
            if(!$pengumuman->mulai_tanggal){
                $message = $this->formatMessage($request, true);
                $this->telegramService->sendMessage($message);

                $pengumuman->update([
                    'sent_at' => $now
                ]);
            }
            if(($pengumuman->mulai_tanggal >= $now) && ($pengumuman->mulai_tanggal <= $sevenDayFromNow)){
                $message = $this->formatMessage($request, true);
                $this->telegramService->sendMessage($message);

                $pengumuman->update([
                    'sent_at' => $now
                ]);
            }
        }else{
            if(!$pengumuman->mulai_tanggal){
                $message = $this->formatMessage($request, false);
                $this->telegramService->sendMessage($message);

                $pengumuman->update([
                    'sent_at' => $now
                ]);
            }
            if(($pengumuman->mulai_tanggal >= $now) && ($pengumuman->mulai_tanggal <= $sevenDayFromNow)){
                $message = $this->formatMessage($request, false);
                $this->telegramService->sendMessage($message);

                $pengumuman->update([
                    'sent_at' => $now
                ]);
            }
        }

        return redirect()->back()->with('success', 'Pengumuman berhasil diubah');
    }

    public function destroyPengumuman($id)
    {
        $pengumuman = PengumumanModel::find($id);
        $pengumuman->delete();

        return redirect()->back()->with('success', 'Pengumuman berhasil dihapus');
    }

    private function formatMessage(Request $request, $ralat = false)
    {
        $message = '';
        if($ralat){
            $message = "<b>Perubahan Pengumuman</b>\n\n";
        }
        $message .= "<b>" . $request->judul . "</b>\n\n";
        if ($request->kategori != null) {
            $message .= "Kategori: $request->kategori\n";
        }
        if ($request->mulai_tanggal != null) {
            $message .= "Mulai tanggal: $request->mulai_tanggal\n";
        }
        if ($request->akhir_tanggal != null) {
            $message .= "Selesai tanggal: $request->akhir_tanggal\n";
        }
        if ($request->mulai_waktu != null) {
            $message .= "Mulai waktu: $request->mulai_waktu\n";
        }
        if ($request->akhir_waktu != null) {
            $message .= "Selesai waktu: $request->akhir_waktu\n";
        }
        if ($request->iuran != null) {
            $message .= "Iuran: $request->iuran\n";
        }
        if ($request->lokasi != null) {
            $message .= "Lokasi: $request->lokasi\n";
        }
        $message .= "$request->konten\n";

        return $message;
    }
}
