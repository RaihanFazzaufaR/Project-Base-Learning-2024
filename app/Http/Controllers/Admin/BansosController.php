<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BansosModel;
use App\Models\RekomendasiPenerimaModel;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        $page = 'listBansos';
        $selected = 'Bansos';

        $user = BansosModel::paginate(10)->withQueryString();

        return view('Admin.Bansos.index', compact('user', 'page', 'selected'));
    }

    public function rekomendasiBansos()
    {
        $page = 'rekomendasiBansos';
        $selected = 'Bansos';

        $user = RekomendasiPenerimaModel::paginate(10)->withQueryString();

        return view('Admin.Bansos.rekomendasi-bansos', compact('user', 'page', 'selected'));
    }
}
