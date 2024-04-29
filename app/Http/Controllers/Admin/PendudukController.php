<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function daftarPendudukViewAdmin()
    {
        $page = 'daftarPenduduk';
        $selected = 'Kependudukan';

        $user = PendudukModel::all();

        return view('admin.kependudukan.index', compact('user', 'page', 'selected'));
    }
    public function daftarAkunViewAdmin()
    {
        $page = 'daftarAkun';
        $selected = 'Kependudukan';

        return view('admin.kependudukan.index')->with([
            'page' => $page,
            'selected' => $selected
        ]);
    }
    public function daftarNkkViewAdmin()
    {
        $page = 'daftarNkk';
        $selected = 'Kependudukan';

        return view('admin.kependudukan.index')->with([
            'page' => $page,
            'selected' => $selected
        ]);
    }
}
