<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $menu = 'Penduduk';
        return view('penduduk.index', compact('menu'));
    }
}
