<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PendudukModel;
use App\Models\UserAccountModel;
use App\Models\KartuKeluargaModel;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function index()
    {
        $menu = 'Profil';
        $jumlahKK = KartuKeluargaModel::where('niKeluarga', '!=', '0000000000000001')->count();
        $jumlahPenduduk = PendudukModel::where('nik', '!=', '0000000000000001')->count();
        $jumlahRT = KartuKeluargaModel::select(DB::raw('count(distinct rt) as rt_count'))->first()->rt_count;
        $profileRW = PendudukModel::with('userAccount', 'kartuKeluarga')->where('jabatan', 'Ketua RW')->get()->first();
        $profileRT = PendudukModel::with('userAccount', 'kartuKeluarga')
            ->join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->where('jabatan', 'Ketua RT')
            ->orderBy('tb_kartukeluarga.rt')
            ->select('tb_penduduk.*')
            ->get();

        if ($profileRW->userAccount == null) {
            $imageRW = 'default.jpg';
        } else if ($profileRW->userAccount->image == null) {
            $imageRW = 'default.jpg';
        } else {
            $imageRW = $profileRW->userAccount->image;
        }

        foreach ($profileRT as $rt) {
            if ($rt->userAccount !== null && $rt->userAccount->image !== null) {
                $image = $rt->userAccount->image;
            } else {
                $image = 'default.jpg';
            }
            $profileRTnew[] = ['profile' => $rt, 'image' => $image];
        }

        return view('Profil.index', compact('menu','jumlahKK', 'jumlahPenduduk', 'jumlahRT', 'profileRW', 'profileRTnew', 'imageRW'));
    }
}
