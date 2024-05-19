<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $menu = 'Kegiatan';
        return view('jadwal.index', compact('menu'));
    }
}
