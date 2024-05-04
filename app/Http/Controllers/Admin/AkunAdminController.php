<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class AkunAdminController extends Controller
{
    public function index()
    {
        $page = 'akunAdmin';
        $selected = 'Akun Admin';

        $user = PendudukModel::paginate(10);

        return view('admin.akun-admin.index', compact('user', 'page', 'selected'));
    }
}
