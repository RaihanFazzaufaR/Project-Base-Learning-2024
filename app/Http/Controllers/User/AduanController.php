<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AduanModel;

class AduanController extends Controller
{
    public function index(Request $request)
    {
        $menu = 'Aduan';
        $aduans = AduanModel::query()->where('status', 'selesai');

        if ($request->filled('search') && $request->prioritas != "") {
            $aduans->where(function ($query) use ($request) {
                $query->where('judul', 'like', '%' . $request->search . '%')
                    ->where('prioritas', $request->prioritas);
            });
        } elseif ($request->filled('search')) {
            $aduans->where('judul', 'like', '%' . $request->search . '%');
        } elseif ($request->prioritas != "") {
            $aduans->where('prioritas', $request->prioritas);
        }

        $aduans = $aduans->paginate(10)->withQueryString();

        return view('aduan.index', compact('menu', 'aduans'));
    }

    public function indexAduanku(Request $request)
    {
        $menu = 'Aduanku';
        $aduans = AduanModel::query()->where('pengadu_id', auth()->user()->id);

        if ($request->filled('search') && $request->prioritas != "") {
            $aduans->where(function ($query) use ($request) {
                $query->where('judul', 'like', '%' . $request->search . '%')
                    ->where('prioritas', $request->prioritas);
            });
        } elseif ($request->filled('search')) {
            $aduans->where('judul', 'like', '%' . $request->search . '%');
        } elseif ($request->prioritas != "") {
            $aduans->where('prioritas', $request->prioritas);
        }

        $aduans = $aduans->paginate(10)->withQueryString();

        return view('aduan.index', compact('menu', 'aduans'));
    }
}
