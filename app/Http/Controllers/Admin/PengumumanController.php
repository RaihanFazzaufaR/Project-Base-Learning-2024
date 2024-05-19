<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $page = 'pengumuman';
        $selected = 'Pengumuman';

        $user = PendudukModel::paginate(10);

        return view('admin.pengumuman.index', compact('user', 'page', 'selected'));
    }
}
