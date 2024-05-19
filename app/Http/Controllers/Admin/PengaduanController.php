<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AduanModel;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        $page = 'pengaduan';
        $selected = 'Pengaduan';
        $complaints = AduanModel::paginate(10)->withQueryString();
        return view('admin.pengaduan.index', compact('page', 'selected', 'complaints'));
    }
}
