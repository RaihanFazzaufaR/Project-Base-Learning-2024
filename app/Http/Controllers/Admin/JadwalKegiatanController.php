<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalModel;
use App\Models\PendudukModel;
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

    public function ajuanKegiatan()
    {
        $page = 'ajuan kegiatan';
        $selected = 'Jadwal Kegiatan';
        $users = PendudukModel::all();
        $data = JadwalModel::where('status', 'diproses')->paginate(10);
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

        JadwalModel::find($id)->update([
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

        return redirect('/admin/jadwal-kegiatan')->with('success', 'Data berhasil diupdate!');
    }
    public function destroyKegiatan(Request $request, $id)
    {
        $check = JadwalModel::find($id);

        try {
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


        JadwalModel::create([
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

        return redirect('/admin/jadwal-kegiatan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function acceptKegiatan(Request $request) {
        // dd($request->all());

        JadwalModel::find($request->id)->update([
            'status' => 'selesai'
        ]);

        return redirect('/admin/jadwal-kegiatan/ajuan-kegiatan')->with('success', 'Data berhasil diterima!');
    }

    public function rejectKegiatan(Request $request, $id) {
        
        JadwalModel::find($id)->update([
            'status' => 'ditolak',
            'alasan_tolak' => $request->alasan,
        ]);

        return redirect('/admin/jadwal-kegiatan/ajuan-kegiatan')->with('success', 'Data berhasil ditolak!');
    }
}
