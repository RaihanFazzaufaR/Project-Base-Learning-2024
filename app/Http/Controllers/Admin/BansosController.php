<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        $page = 'listBansos';
        $selected = 'Bansos';

        $user = PendudukModel::paginate(10);

        return view('admin.bansos.index', compact('user', 'page', 'selected'));
    }

    public function rekomendasiBansos()
    {
        $page = 'rekomendasiBansos';
        $selected = 'Bansos';

        $user = PendudukModel::paginate(10);

        return view('admin.bansos.rekomendasi-bansos', compact('user', 'page', 'selected'));
    }
}
