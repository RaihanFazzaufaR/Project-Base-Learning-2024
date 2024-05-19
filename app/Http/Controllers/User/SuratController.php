<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $menu = 'Surat';
        // return view('Surat.formSK', compact('menu'));
        return view('Surat.formSKPindah', compact('menu'));
        // return view('Surat.formSKkematian', compact('menu'));
    }
    public function suratku()
    {
        $menu = 'Surat';
        // return view('Surat.formSK', compact('menu'));
        return view('Surat.formSKPindah', compact('menu'));
        // return view('Surat.formSKkematian', compact('menu'));
    }
}
