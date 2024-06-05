<?php

namespace App\View\Components;

use App\Models\JadwalModel;
use App\Models\UmkmModel;
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

        $jadwalQueryRT = JadwalModel::join('tb_penduduk', 'tb_jadwal.pembuat_id', '=', 'tb_penduduk.id_penduduk')
            ->join('tb_useraccount', 'tb_penduduk.id_penduduk', '=', 'tb_useraccount.id_penduduk')
            ->join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
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
            ->where('tb_jadwal.status', 'diproses')
            ->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartukeluarga->rt);

        $jadwalQueryRW = JadwalModel::join('tb_penduduk', 'tb_jadwal.pembuat_id', '=', 'tb_penduduk.id_penduduk')
            ->join('tb_useraccount', 'tb_penduduk.id_penduduk', '=', 'tb_useraccount.id_penduduk')
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
            ->where('tb_jadwal.status', 'diproses');

        $umkmQuery = UmkmModel::join('tb_penduduk', 'tb_umkm.id_pemilik', '=', 'tb_penduduk.id_penduduk')
            ->join('tb_useraccount', 'tb_penduduk.id_penduduk', '=', 'tb_useraccount.id_penduduk')
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
            ->where('tb_umkm.status', 'diproses');

        $bansosQuery = DB::table('tb_ajuan_bansos')
            ->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->join('tb_penduduk', 'tb_kartukeluarga.kepalaKeluarga', '=', 'tb_penduduk.nik')
            ->join('tb_useraccount', 'tb_penduduk.id_penduduk', '=', 'tb_useraccount.id_penduduk')
            ->select(
                DB::raw('"Maaf anda tidak termasuk ke dalam kriteria penerima bansos" as reason'),
                'tb_ajuan_bansos.updated_at',
                'tb_ajuan_bansos.status',
                DB::raw('tb_ajuan_bansos.id_kartuKeluarga as id'),
                DB::raw("'tb_bansos' as source"),
                'tb_penduduk.nama as nama',
                'tb_useraccount.image as image'
            )
            ->whereDate('tb_ajuan_bansos.updated_at', '<=', $today)
            ->whereDate('tb_ajuan_bansos.updated_at', '>=', $sevenDaysAgo)
            ->where('tb_ajuan_bansos.status', 'diproses')
            ->where('tb_ajuan_bansos.id_kartuKeluarga', auth()->user()->penduduk->id_kartuKeluarga);

        $data = (auth()->user()->penduduk->jabatan == 'Ketua RW') ? $jadwalQueryRW->union($umkmQuery)->orderBy('updated_at', 'desc')->get() : $jadwalQueryRT->unionAll($bansosQuery)->orderBy('updated_at', 'desc')->get();

        // dd($umkmQuery);

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
