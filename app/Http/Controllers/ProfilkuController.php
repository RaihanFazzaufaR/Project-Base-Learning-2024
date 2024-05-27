<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PendudukModel;

class ProfilkuController extends Controller
{
    public function index()
    {
        $menu = '';

        $user = Auth::user();

        $id_penduduk = $user->penduduk->id_penduduk;

        $penduduk = PendudukModel::with('userAccount', 'kartuKeluarga')
            ->where('id_penduduk', $id_penduduk)
            ->first();
        // return $penduduk;
        if (!$penduduk) {
            return redirect()->route('profilku')->with('error', 'Data penduduk tidak ditemukan');
        }

        return view('profilku', compact('menu', 'penduduk'));
    }
}