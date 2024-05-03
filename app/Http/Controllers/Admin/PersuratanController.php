<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PersuratanController extends Controller
{
    public function daftarPendudukViewAdmin()
    {
        $page = 'daftarPenduduk';
        $selected = 'Kependudukan';

        $user = PendudukModel::paginate(10);

        return view('admin.persuratan.index', compact('user', 'page', 'selected'));
    }
}
