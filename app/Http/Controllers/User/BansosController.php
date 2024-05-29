<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        $menu = 'Bansos';
        return view('Bansos.index', compact('menu'));
    }
}
