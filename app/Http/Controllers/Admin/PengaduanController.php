<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $page = 'daftarPengaduan';
        $selected = 'Pengaduan';
        $modalTambah = false;
        $user = PendudukModel::paginate(10);
        return view('admin.pengaduan.index', compact('page', 'selected', 'modalTambah', 'user'));
    }
}
