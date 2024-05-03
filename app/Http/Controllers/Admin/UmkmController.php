<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $page = 'listUmkm';
        $selected = 'Umkm';

        $user = PendudukModel::paginate(10);

        return view('admin.umkm.index', compact('user', 'page', 'selected'));
    }
}
