<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PersuratanController extends Controller
{
    public function index()
    {
        $page = 'daftarPersuratan';
        $selected = 'Persuratan';

        $user = PendudukModel::paginate(10);

        return view('admin.persuratan.index', compact('user', 'page', 'selected'));
    }
    public function ajuanPersuratan()
    {
        $page = 'ajuanPersuratan';
        $selected = 'Persuratan';

        $user = PendudukModel::paginate(10);

        return view('admin.persuratan.ajuanSurat', compact('user', 'page', 'selected'));
    }
    public function templateSurat()
    {
        $page = 'templateSurat';
        $selected = 'Persuratan';

        $user = PendudukModel::paginate(10);

        return view('admin.persuratan.templateSurat', compact('user', 'page', 'selected'));
    }
}
