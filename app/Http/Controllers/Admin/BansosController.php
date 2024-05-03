<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        $page = 'bansos';
        $selected = 'Bansos';

        $user = PendudukModel::paginate(10);

        return view('admin.bansos.index', compact('user', 'page', 'selected'));
    }
}
