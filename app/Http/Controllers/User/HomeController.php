<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AduanModel;
use App\Models\JadwalModel;
use App\Models\UmkmModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $menu = 'Home';
        Carbon::setLocale('id');
    
        $calendarDate = $request->filled('date') ? $request->date : date('Y-m-d');
        
        if (isset($request->date)) {

            $dataKegiatan = JadwalModel::where('status', 'selesai')
                ->where('mulai_tanggal', '<=', $calendarDate)
                ->where('akhir_tanggal', '>=', $calendarDate)
                ->orderBy('mulai_waktu', 'asc')
                ->get();
        } else {
            $currentMonth = $request->month ?? Carbon::now()->month;
            $currentYear = $request->year ?? Carbon::now()->year;

            $dataKegiatan = JadwalModel::where('status', 'selesai')
                ->whereMonth('mulai_tanggal', $currentMonth)
                ->whereYear('mulai_tanggal', $currentYear)
                ->orderBy('mulai_tanggal', 'asc')
                ->get();
        }


        $dataKegiatan = $this->formatDateAndTime($dataKegiatan);

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

        $dataUmkm = UmkmModel::where('status', 'diterima')
            ->inRandomOrder()
            ->limit(8)
            ->get();

        $dataUmkm = $this->formatDateAndTime($dataUmkm);

        $aduans = AduanModel::where('status', 'selesai')
            ->inRandomOrder()
            ->limit(4)
            ->get();;

        // Initialize $startDate with the current date if no date is provided in the request
        $startDate = $request->input('date') ? Carbon::parse($request->input('date')) : Carbon::now();

        // Initialize an array to store the dates
        $dates = [];

        // Loop to generate dates for the next 7 days
        for ($i = 0; $i < 7; $i++) {
            $dates[] = $startDate->copy()->addDays($i);
        }
        return view('home', compact('menu', 'dataKegiatan', 'dataDate', 'dataUmkm', 'aduans', 'calendarDate', 'dates'));
    }

    private function formatDateAndTime($data)
    {
        foreach ($data as $key => $value) {
            // count dif days
            $value->diffDays = Carbon::parse($value->akhir_tanggal)->diffInDays(Carbon::parse($value->mulai_tanggal));

            // tb_jadwal
            $value->mulai_waktu = Carbon::parse($value->mulai_waktu)->format('H:i');
            $value->akhir_waktu = Carbon::parse($value->akhir_waktu)->format('H:i');

            $value->tgl_mulai = $value->mulai_tanggal;
            $value->mulai_tanggal = Carbon::parse($value->mulai_tanggal)->translatedFormat('d M');
            $value->tgl_akhir = $value->akhir_tanggal;
            $value->akhir_tanggal = Carbon::parse($value->akhir_tanggal)->translatedFormat('d M');

            // tb_umkm
            $value->buka_waktu = Carbon::parse($value->buka_waktu)->format('H:i');
            $value->tutup_waktu = Carbon::parse($value->tutup_waktu)->format('H:i');
        }

        return $data; // Mengembalikan data yang telah diformat
    }
}
