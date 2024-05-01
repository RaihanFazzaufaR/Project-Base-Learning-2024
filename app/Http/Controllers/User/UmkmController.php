<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UmkmModel;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = UmkmModel::where('status', 'selesai')->paginate(3);
        return view('Umkm.index', ['umkms' => $umkms]);
    }

    public function umkmku()
    {
        return view('umkm.umkmku');
    }
}