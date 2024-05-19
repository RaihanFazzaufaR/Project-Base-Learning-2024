<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AduanModel;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        $page = 'pengaduan';
        $selected = 'Pengaduan';
        $aduan_id = 0;
        $complaints = AduanModel::query();

        if($request->filled('aduan_id')) {
            $aduan_id = $request->aduan_id;
        } elseif($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
            $complaints->where('judul', 'like', $searchTerm);
        } elseif($request->all()) {
            $complaints->where(function($query) use ($request) {
                if($request->filled('status')) {
                    $query->where('status', $request->status);
                }
            });
        }

        $complaints = $complaints->paginate(10)->withQueryString();
        
        return view('admin.pengaduan.index', compact('page', 'selected', 'complaints', 'aduan_id'));
    }
}
