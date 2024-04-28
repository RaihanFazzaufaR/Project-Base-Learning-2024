<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        return view('penduduk.index');
    }
}
