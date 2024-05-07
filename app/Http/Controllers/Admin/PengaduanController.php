<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $page = 'daftarPengaduan';
        $selected = 'Pengaduan';
        $modalTambah = false;
        return view('admin.pengaduan.index', compact('page', 'selected', 'modalTambah'));
    }
}
