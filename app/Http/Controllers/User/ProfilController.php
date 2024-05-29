<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PendudukModel;
use App\Models\UserAccountModel;

class ProfilController extends Controller
{
    public function index()
    {
        $menu = 'Profil';
        $profileRW = PendudukModel::with('userAccount', 'kartuKeluarga')->where('jabatan', 'Ketua RW')->get()->first();
        $profileRT = PendudukModel::with('userAccount', 'kartuKeluarga')
            ->join('tb_kartuKeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartuKeluarga.id_kartuKeluarga')
            ->where('jabatan', 'Ketua RT')
            ->orderBy('tb_kartuKeluarga.rt')
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

        return view('Profil.index', compact('menu', 'profileRW', 'profileRTnew', 'imageRW'));
    }
}
