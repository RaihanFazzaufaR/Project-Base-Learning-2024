<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\JadwalModel;
use App\Models\PendudukModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        Carbon::setLocale('id');

        $menu = 'Kegiatan';
        $scrollAuto = '';

        $searchingKey = $request->filled('search') ? $request->search : '';
        $kategoriSearching = $request->filled('kategoriSearching') ? $request->kategoriSearching : '';

        $dataSearchingQuery = JadwalModel::where('status', 'selesai')->orderBy('mulai_tanggal', 'asc');

        if ($request->filled('search')) {
            $dataSearchingQuery->where('aktivitas_tipe', 'LIKE', '%' . $searchingKey . '%')
                ->orWhere('judul', 'LIKE', '%' . $searchingKey . '%');
        }

        if ($request->filled('kategoriSearching')) {
            $dataSearchingQuery->where('aktivitas_tipe', '=', $kategoriSearching);
        }

        $dataSearching = $dataSearchingQuery->get();

        $dataSearching = $this->formatDateAndTime($dataSearching);

        // dd($request->filled('search'));
        // dd($dataSearching->toArray());

        $dataUpcoming = JadwalModel::where('mulai_tanggal', '>', date('Y-m-d'))
            ->where('status', 'selesai')
            ->orderBy('mulai_tanggal', 'asc')
            ->limit(3)
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

        $kategoriPastPrev = $request->session()->has('kategori') ? $request->session()->get('kategori') : '';
        $kategoriPast = $request->filled('kategoriPast') ? $request->kategoriPast : 'Umum';

        $dataPast = JadwalModel::where('mulai_tanggal', '<', date('Y-m-d'))
            ->where('status', 'selesai')
            ->orderBy('mulai_tanggal', 'desc')
            ->limit(6)
            ->get();

        if ($kategoriPast != 'Umum') {
            $dataPast = $dataPast->where('aktivitas_tipe', '=', $kategoriPast);
        }

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

        // Memanggil dan memformat data menggunakan fungsi formatDate
        $dataPast = $this->formatDateAndTime($dataPast);

        if ($calendarDatePrev != $calendarDate && $request->filled('date')) {
            $scrollAuto = 'calendar';
        } else if ($kategoriPastPrev != $kategoriPast && $request->filled('kategoriPast')) {
            $scrollAuto = 'kategori';
        } else if ($request->filled('search') || $request->filled('kategoriSearching')) {
            $scrollAuto = 'search';
        }

        $request->session()->put('date', $calendarDate);
        $request->session()->put('kategori', $kategoriPast);

        $dataArray = [
            'dataUpcoming' => $dataUpcoming,
            'dataToday' => $dataToday,
            'dataPast' => $dataPast,
            'dataDate' => $dataDate,
            'dataSearching' => $dataSearching,
        ];


        // dd($messages->toArray());

        return view('Jadwal.index', compact('menu', 'dataArray', 'kategoriPast', 'dateFormat', 'calendarDate', 'scrollAuto', 'searchingKey', 'kategoriSearching'));
    }

    private function messages()
    {
        $today = Carbon::today()->toDateString();
        $data = JadwalModel::whereDate('updated_at', $today)->get();
        foreach ($data as  $value) {
            $value->updated_at = Carbon::parse($value->updated_at);
            $value->diffTime = $value->updated_at->diffInHours(Carbon::now());
        }
        return $data;
    }


    private function formatDateAndTime($data)
    {
        foreach ($data as $key => $value) {
            // count dif days
            $value->diffDays = Carbon::parse($value->akhir_tanggal)->diffInDays(Carbon::parse($value->mulai_tanggal));

            $value->mulai_tanggal = Carbon::parse($value->mulai_tanggal)->translatedFormat('d F Y');
            $value->akhir_tanggal = Carbon::parse($value->akhir_tanggal)->translatedFormat('d F Y');
            $value->mulai_waktu = Carbon::parse($value->mulai_waktu)->format('H:i');
            $value->akhir_waktu = Carbon::parse($value->akhir_waktu)->format('H:i');
        }

        return $data; // Mengembalikan data yang telah diformat
    }

    public function ajuanKegiatan(Request $request)
    {
        // dd($request->all());

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
            'pembuat_id' => $request->id,
            'status' => 'diproses',
            'iuran' => $request->iuran,
            'lokasi' => $request->lokasi,
        ]);

        return redirect('/jadwal')->with('success', 'Kegiatan yang anda ajukan sedang diproses!');
    }

    public function searchingJadwal(Request $request)
    {
        $dataSearchingQuery = JadwalModel::where('status', 'selesai')->orderBy('mulai_tanggal', 'asc')
            ->where('aktivitas_tipe', 'LIKE', '%' . $request . '%')
            ->orWhere('judul', 'LIKE', '%' . $request . '%');
        
        return json_encode($dataSearchingQuery->get());
    }
}
