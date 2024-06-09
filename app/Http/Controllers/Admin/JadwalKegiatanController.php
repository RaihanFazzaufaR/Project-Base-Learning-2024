<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\PengumumanController;
use App\Models\JadwalModel;
use App\Models\PendudukModel;
use App\Models\PengumumanModel;
use App\Services\TelegramService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JadwalKegiatanController extends Controller
{
    public function index(Request $request)
    {
        Carbon::setLocale('id');

        $page = 'jadwal kegiatan';
        $selected = 'Jadwal Kegiatan';

        $dataUpcoming = JadwalModel::where('mulai_tanggal', '>', date('Y-m-d'))
            ->where('status', 'selesai')
            ->orderBy('mulai_tanggal', 'asc')
            ->get();

        $dataUpcoming = $this->formatDateAndTime($dataUpcoming);

        $calendarDatePrev = $request->session()->has('date') ? $request->session()->get('date') : '';
        $calendarDate = $request->filled('date') ? $request->date : date('Y-m-d');

        $dataToday = JadwalModel::where('status', 'selesai')
            ->where('mulai_tanggal', '<=', $calendarDate)
            ->where('akhir_tanggal', '>=', $calendarDate)
            ->orderBy('mulai_waktu', 'asc')
            ->get();

        foreach ($dataToday as $dt) {
            $dt->dateNow = Carbon::parse($calendarDate)->diffInDays(Carbon::parse($dt->mulai_tanggal)) + 1;
        }

        $dateFormat = Carbon::parse($calendarDate)->translatedFormat('d F Y');
        $dataToday = $this->formatDateAndTime($dataToday);

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

        $dataArray = [
            'dataUpcoming' => $dataUpcoming,
            'dataToday' => $dataToday,
            'dataDate' => $dataDate,
        ];

        $penduduk = PendudukModel::all();
        // dd($penduduk->toArray());

        return view('Admin.JadwalKegiatan.index', compact('dataArray', 'dateFormat', 'page', 'selected', 'penduduk'));
    }

    private function formatDateAndTime($data)
    {
        foreach ($data as $value) {
            // count dif days
            $value->diffDays = Carbon::parse($value->akhir_tanggal)->diffInDays(Carbon::parse($value->mulai_tanggal));

            $value->tgl_mulai = $value->mulai_tanggal;
            $value->mulai_tanggal = Carbon::parse($value->mulai_tanggal)->translatedFormat('d M');
            $value->tgl_akhir = $value->akhir_tanggal;
            $value->akhir_tanggal = Carbon::parse($value->akhir_tanggal)->translatedFormat('d M');
            $value->mulai_waktu = Carbon::parse($value->mulai_waktu)->format('H:i');
            $value->akhir_waktu = Carbon::parse($value->akhir_waktu)->format('H:i');
        }

        return $data; // Mengembalikan data yang telah diformat
    }

    public function ajuanKegiatan(Request $request)
    {
        $page = 'ajuan kegiatan';
        $selected = 'Jadwal Kegiatan';
        $users = PendudukModel::all();
        $data = JadwalModel::query();

        if ($request->filled('search')) {
            $searchingKey = $request->search;
            $data = $data->where('aktivitas_tipe', 'LIKE', '%' . $searchingKey . '%')
                ->orWhere('judul', 'LIKE', '%' . $searchingKey . '%');
        }

        if (auth()->user()->penduduk->jabatan == 'Ketua RW') {
            $data = $data->where('status', 'diproses');
        } else {
            $data = $data->where('status', 'diproses')
                ->whereHas('penduduk', function ($query) {
                    $query->whereHas('kartuKeluarga', function ($query) {
                        $query->where('rt', auth()->user()->penduduk->kartuKeluarga->rt);
                    });
                });
        }
        $data = $data->paginate(10)->withQueryString();
        $data = $this->formatDateAndTime($data);

        // $umkmKategoris = UmkmKategoriModel::all();
        // $categories = KategoriModel::all();
        return view('Admin.JadwalKegiatan.ajuanKegiatan', compact('users', 'data', 'page', 'selected'));
    }

    public function updateKegiatan(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'kategori' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_selesai' => 'required',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'deskripsi' => 'required',
                'nik' => 'required|exists:tb_penduduk,nik',
                'iuran' => 'required',
                'lokasi' => 'required',
            ]
        );

        // dd(PendudukModel::select('id_penduduk')->where('nik', $request->nik)->first()->id_penduduk);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $jadwal = JadwalModel::find($id);

        $jadwal->update([
            'judul' => $request->nama,
            'aktivitas_tipe' => $request->kategori,
            'mulai_tanggal' => $request->tanggal_mulai,
            'akhir_tanggal' => $request->tanggal_selesai,
            'mulai_waktu' => $request->jam_mulai,
            'akhir_waktu' => $request->jam_selesai,
            'konten' => $request->deskripsi,
            'pembuat_id' => PendudukModel::select('id_penduduk')->where('nik', $request->nik)->first()->id_penduduk,
            'status' => 'selesai',
            'iuran' => $request->iuran,
            'lokasi' => $request->lokasi,
        ]);

        $pengumuman_id = PengumumanModel::where('jadwal_id', $id)->value('pengumuman_id');

        $pengumumanController = new PengumumanController(new TelegramService());
        $reqPengumuman = new Request([
            'judul' => $request->nama,
            'kategori' => $request->kategori,
            'mulai_tanggal' => $request->tanggal_mulai,
            'akhir_tanggal' => $request->tanggal_selesai,
            'mulai_waktu' => $request->jam_mulai,
            'akhir_waktu' => $request->jam_selesai,
            'konten' => $request->deskripsi,
            'jadwal_id' => $id,
            'pembuat_id_pengumuman' => null,
            'iuran' => $request->iuran,
            'lokasi' => $request->lokasi,
        ]);
        // dd($reqPengumuman, $pengumuman_id);

        $pengumumanController->updatePengumuman($reqPengumuman, $pengumuman_id);

        return redirect('/admin/jadwal-kegiatan')->with('success', 'Data berhasil diupdate!');
    }
    public function destroyKegiatan(Request $request, $id)
    {
        $check = JadwalModel::find($id);

        try {
            // PengumumanModel::where('jadwal_id', $id)->delete();
            PengumumanModel::where('jadwal_id', $id)->update([
                'jadwal_id' => null,
            ]);
            JadwalModel::destroy($id);
            return redirect('/admin/jadwal-kegiatan')->with('success', 'Data berhasil dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/admin/jadwal-kegiatan')->with('error', 'Data kegiatan gagal dihapus karena masih terdapat tabel lain yang terikat dengan data ini');
        }
    }
    public function storeKegiatan(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'kategori' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_selesai' => 'required',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'deskripsi' => 'required',
                'nik' => 'required|exists:tb_penduduk,nik',
                'iuran' => 'required',
                'lokasi' => 'required',
            ]
        );

        // dd(PendudukModel::select('id_penduduk')->where('nik', $request->nik)->first()->id_penduduk);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }


        $jadwal = JadwalModel::create([
            'judul' => $request->nama,
            'aktivitas_tipe' => $request->kategori,
            'mulai_tanggal' => $request->tanggal_mulai,
            'akhir_tanggal' => $request->tanggal_selesai,
            'mulai_waktu' => $request->jam_mulai,
            'akhir_waktu' => $request->jam_selesai,
            'konten' => $request->deskripsi,
            'pembuat_id' => PendudukModel::select('id_penduduk')->where('nik', $request->nik)->first()->id_penduduk,
            'status' => 'selesai',
            'iuran' => $request->iuran,
            'lokasi' => $request->lokasi,
        ]);

        $pengumumanController = new PengumumanController(new TelegramService());
        $reqPengumuman = new Request([
            'judul' => $request->nama,
            'kategori' => $request->kategori,
            'mulai_tanggal' => $request->tanggal_mulai,
            'akhir_tanggal' => $request->tanggal_selesai,
            'mulai_waktu' => $request->jam_mulai,
            'akhir_waktu' => $request->jam_selesai,
            'konten' => $request->deskripsi,
            'jadwal_id' => $jadwal->jadwal_id,
            'pembuat_id_pengumuman' => null,
            'iuran' => $request->iuran,
            'lokasi' => $request->lokasi,
        ]);
        $pengumumanController->tambahPengumuman($reqPengumuman);

        return redirect('/admin/jadwal-kegiatan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function acceptKegiatan(Request $request)
    {
        // dd($request->all());

        JadwalModel::find($request->id)->update([
            'status' => 'selesai'
        ]);

        $jadwal = JadwalModel::where('jadwal_id', $request->id)->get()->first();

        $pengumumanController = new PengumumanController(new TelegramService());
        $reqPengumuman = new Request([
            'judul' => $jadwal->judul,
            'kategori' => $jadwal->aktivitas_tipe,
            'mulai_tanggal' => $jadwal->mulai_tanggal,
            'akhir_tanggal' => $jadwal->akhir_tanggal,
            'mulai_waktu' => $jadwal->mulai_waktu,
            'akhir_waktu' => $jadwal->akhir_waktu,
            'konten' => $jadwal->konten,
            'jadwal_id' => $jadwal->jadwal_id,
            'pembuat_id_pengumuman' => null,
            'iuran' => $jadwal->iuran,
            'lokasi' => $jadwal->lokasi,
        ]);
        $pengumumanController->tambahPengumuman($reqPengumuman);

        return redirect('/admin/jadwal-kegiatan/ajuan-kegiatan')->with('success', 'Data berhasil diterima!');
    }

    public function rejectKegiatan(Request $request, $id)
    {

        JadwalModel::find($id)->update([
            'status' => 'ditolak',
            'alasan_tolak' => $request->alasan,
        ]);

        return redirect('/admin/jadwal-kegiatan/ajuan-kegiatan')->with('success', 'Data berhasil ditolak!');
    }
}
