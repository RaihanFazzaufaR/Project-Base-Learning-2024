<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class NavbarAdmin extends Component
{
    public $selected;
    public function __construct($selected)
    {
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $messages = $this->messages();
        return view('components.navbar-admin', compact('messages'));
    }

    private function messages()
    {
        $today = Carbon::today()->toDateString();
        $sevenDaysAgo = Carbon::today()->subDays(7)->toDateString();
        $id = auth()->user()->id_penduduk ?? 0;
        // $data = PendudukModel::with(['jadwal', 'umkm'])->whereDate('updated_at', $today)->get();
        $jadwalQuery = DB::table('tb_jadwal')
            ->join('tb_penduduk', 'tb_jadwal.pembuat_id', '=', 'tb_penduduk.id_penduduk')
            ->join('tb_useraccount', 'tb_jadwal.pembuat_id', '=', 'tb_useraccount.id_penduduk')
            ->select(
                DB::raw('tb_jadwal.alasan_tolak as reason'),
                'tb_jadwal.updated_at',
                'tb_jadwal.status',
                DB::raw('tb_jadwal.pembuat_id as id'),
                DB::raw("'tb_jadwal' as source"),
                'tb_penduduk.nama as nama',
                'tb_useraccount.image as image'
            )
            ->whereDate('tb_jadwal.updated_at', '<=', $today)
            ->whereDate('tb_jadwal.updated_at', '>=', $sevenDaysAgo)
            ->where('tb_jadwal.pembuat_id', $id)
            ->where('tb_jadwal.status', 'diproses');

        $umkmQuery = DB::table('tb_umkm')
            ->join('tb_penduduk', 'tb_umkm.id_pemilik', '=', 'tb_penduduk.id_penduduk')
            ->join('tb_useraccount', 'tb_umkm.id_pemilik', '=', 'tb_useraccount.id_penduduk')
            ->select(
                DB::raw('tb_umkm.alasan_rw as reason'),
                'tb_umkm.updated_at',
                'tb_umkm.status',
                DB::raw('tb_umkm.id_pemilik as id'),
                DB::raw("'tb_umkm' as source"),
                'tb_penduduk.nama as nama',
                'tb_useraccount.image as image'
            )
            ->whereDate('tb_umkm.updated_at', '<=', $today)
            ->whereDate('tb_umkm.updated_at', '>=', $sevenDaysAgo)
            ->where('tb_umkm.status', 'diproses')
            ->where('tb_umkm.id_pemilik', $id);

        // Combining the queries with unionAll
        $data = $jadwalQuery->unionAll($umkmQuery)->orderBy('updated_at', 'desc')->get();

        // dd($data);
        foreach ($data as  $value) {
            $value->updated_at = Carbon::parse($value->updated_at);
            $value->diffHours = $value->updated_at->diffInHours(Carbon::now());
            $value->diffMinutes = $value->updated_at->diffInMinutes(Carbon::now());
            $value->diffDays = $value->updated_at->diffInDays(Carbon::now());
        }
        return $data;
    }
}
