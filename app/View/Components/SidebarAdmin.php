<?php

namespace App\View\Components;

use App\Models\AduanModel;
use App\Models\JadwalModel;
use App\Models\UmkmModel;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class SidebarAdmin extends Component
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

        $UmkmRequest = UmkmModel::where('status', 'diproses')->count();
        if (auth()->user()->penduduk->jabatan == 'Ketua RW') {
            $KegiatanRequest = JadwalModel::where('status', 'diproses')->count();
            $AduanRequest = AduanModel::where('status', 'diproses')->count();
            $bansosRequest = 0;
        } else {
            $KegiatanRequest = JadwalModel::where('status', 'diproses')
                ->whereHas('penduduk', function ($query) {
                    $query->whereHas('kartuKeluarga', function ($query) {
                        $query->where('rt', auth()->user()->penduduk->kartuKeluarga->rt);
                    });
                })
                ->count();

            $AduanRequest = AduanModel::where('status', 'diproses')
                ->whereHas('penduduk', function ($query) {
                    $query->whereHas('kartuKeluarga', function ($query) {
                        $query->where('rt', auth()->user()->penduduk->kartuKeluarga->rt);
                    });
                })
                ->count();

            $bansosRequest = DB::table('tb_ajuan_bansos')
                ->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
                ->where('tb_ajuan_bansos.status', 'diproses')
                ->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)
                ->whereMonth('tb_ajuan_bansos.created_at', Carbon::now()->month)
                ->whereYear('tb_ajuan_bansos.created_at', Carbon::now()->year)
                ->count();
        }
        return view('components.sidebar-admin', compact('UmkmRequest', 'KegiatanRequest', 'AduanRequest', 'bansosRequest'));
    }
}
