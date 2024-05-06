<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
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
}
