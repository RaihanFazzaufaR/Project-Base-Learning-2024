<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UmkmModel;

class UmkmController extends Controller
{
    public function index()
    {
        $categories = UmkmModel::distinct()->pluck('tipe');
        $umkms = UmkmModel::where('status', 'selesai')->paginate(3);

        return view('Umkm.index', [
            'umkms' => $umkms,
            'categories' => $categories,
        ]);
    }

    public function umkmku()
    {
        return view('umkm.umkmku');
    }

    public function getDataByCategory($category)
    {
        $categories = UmkmModel::distinct()->pluck('tipe');
        $umkms = UmkmModel::where('tipe', $category)
            ->where('status', 'selesai')
            ->paginate(3);

        return view('Umkm.index', [
            'umkms' => $umkms,
            'categories' => $categories,
        ]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $categories = UmkmModel::distinct()->pluck('tipe');

        $umkms = UmkmModel::where('nama', 'LIKE', "%{$searchTerm}%")
            ->where('status', 'selesai')
            ->paginate(3);

        if ($umkms->isEmpty()) {
            $notification = 'Tidak ada UMKM yang ditemukan dengan nama "' . $searchTerm . '"';
        } else {
            $notification = null;
        }

        return view('Umkm.index', [
            'umkms' => $umkms,
            'categories' => $categories,
            'notification' => $notification,
        ]);
    }

}