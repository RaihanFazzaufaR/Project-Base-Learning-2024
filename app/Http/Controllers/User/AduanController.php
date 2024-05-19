<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        $menu = 'Aduan';
        return view('aduan.index', compact('menu'));
    }
}
