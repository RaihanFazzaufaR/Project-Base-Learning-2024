<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\JadwalModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        Carbon::setLocale('id');

        $menu = 'Kegiatan';
        $scrollAuto = '';

        $searchingKey = $request->filled('search') ? $request->search : '';
        $kategoriSearching = $request->filled('kategoriSearching') ? $request->kategoriSearching : '';

        $dataSearchingQuery = JadwalModel::orderBy('mulai_tanggal', 'asc');

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


        return view('jadwal.index', compact('menu', 'dataUpcoming', 'dataToday', 'dataPast', 'kategoriPast', 'dataDate', 'dateFormat', 'calendarDate', 'scrollAuto', 'searchingKey', 'dataSearching', 'kategoriSearching'));
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
}
