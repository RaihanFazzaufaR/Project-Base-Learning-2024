<?php

namespace App\View\Components;

use App\Models\JadwalModel;
use App\Models\PendudukModel;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $menu;
    public function __construct($menu)
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $messages = $this->messages();
        return view('components.navbar', compact('messages'));
    }

    private function messages()
    {
        $today = Carbon::today()->toDateString();
        $sevenDaysAgo = Carbon::today()->subDays(7)->toDateString();
        $id = auth()->user()->id_penduduk ?? 0;
        $kk = auth()->user()->penduduk->id_kartuKeluarga ?? 0;

        $jadwalQuery = DB::table('tb_jadwal')
            ->select(DB::raw('alasan_tolak as reason'), 'updated_at', 'status', DB::raw('pembuat_id as id'), DB::raw("'tb_jadwal' as source"))
            ->whereDate('updated_at', '<=', $today)
            ->whereDate('updated_at', '>=', $sevenDaysAgo)
            ->where('pembuat_id', $id);

        $umkmQuery = DB::table('tb_umkm')
            ->select(DB::raw('alasan_rw as reason'), 'updated_at', 'status', DB::raw('id_pemilik as id'), DB::raw("'tb_umkm' as source"))
            ->whereDate('updated_at', '<=', $today)
            ->whereDate('updated_at', '>=', $sevenDaysAgo)
            ->where('id_pemilik', $id);

        $bansosQuery = DB::table('tb_ajuan_bansos')
            ->select(DB::raw("'Maaf anda tidak termasuk ke dalam kriteria penerima bansos' as reason"), 'updated_at', 'status', DB::raw('id_kartuKeluarga as id'), DB::raw("'tb_bansos' as source"))
            ->whereDate('updated_at', '<=', $today)
            ->whereDate('updated_at', '>=', $sevenDaysAgo)
            ->where('id_kartuKeluarga', $kk);

        // Union all three queries
        $data = $jadwalQuery->unionAll($umkmQuery)->unionAll($bansosQuery)->orderBy('updated_at', 'desc')->get();


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
