<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalModel;
use App\Models\KategoriModel;
use App\Models\PendudukModel;
use App\Models\UmkmKategoriModel;
use App\Models\UmkmModel;
use Illuminate\Http\Request;

class JadwalKegiatanController extends Controller
{
    public function index()
    {
        $page = 'jadwal kegiatan';
        $selected = 'Jadwal Kegiatan';

        $user = PendudukModel::paginate(10);

        return view('admin.Jadwal-Kegiatan.index', compact('user', 'page', 'selected'));
    }

    public function ajuanKegiatan()
    {
        $page = 'ajuan kegiatan';
        $selected = 'Jadwal Kegiatan';
        $users = PendudukModel::all();
        $data = JadwalModel::where('status', 'diproses')->paginate(10);
        // $umkmKategoris = UmkmKategoriModel::all();
        // $categories = KategoriModel::all();
        return view('admin.Jadwal-Kegiatan.ajuanKegiatan', compact('users', 'data', 'page', 'selected'));
    }
}
