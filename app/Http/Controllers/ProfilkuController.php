<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilkuController extends Controller
{
    public function index()
    {
        $menu = '';
        return view('profilku', compact('menu'));
    }
}
