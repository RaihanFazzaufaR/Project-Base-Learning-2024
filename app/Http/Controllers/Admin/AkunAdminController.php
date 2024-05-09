<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserAccountModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;

class AkunAdminController extends Controller
{
    public function index(Request $request)
    {
        $page = 'akunAdmin';
        $selected = 'Akun Admin';
        $allowedJabatan = ['Ketua RW', 'Ketua RT'];

        $id_penduduk = 0;

        // Menggunakan UserAccountModel untuk mengambil data
        $user = UserAccountModel::query();

        // Filter by jabatan (Ketua RW or Ketua RT) di PendudukModel
        if ($request->filled('jabatan') && in_array($request->jabatan, $allowedJabatan)) {
            $user->whereHas('penduduk', function ($query) use ($request) {
                $query->where('jabatan', $request->jabatan);
            });
        }

        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
            $user->where(function ($query) use ($searchTerm) {
                $query->where('email', 'like', $searchTerm)
                    ->orWhere('username', 'like', $searchTerm)
                    ->orWhereHas('penduduk', function ($query) use ($searchTerm) {
                        $query->where('nik', 'like', $searchTerm)
                            ->orWhere('nama', 'like', $searchTerm)
                            ->orWhere('jabatan', 'like', $searchTerm);
                    });
            });
        }

        // Append search and jabatan parameters for pagination
        if ($request->filled('search') || $request->filled('jabatan')) {
            $user->appends(['search' => $request->search, 'jabatan' => $request->jabatan]);
        }

        $users = $user->paginate(10)->withQueryString();

        // Ambil data NIK, Nama, dan Jabatan dari PendudukModel menggunakan id_penduduk dari UserAccountModel
        $users->getCollection()->transform(function ($item) {
            $penduduk = PendudukModel::find($item->id_penduduk);
            $item->nik = $penduduk->nik;
            $item->nama = $penduduk->nama;
            $item->jabatan = $penduduk->jabatan;
            return $item;
        });

        return view('admin.akun-admin.index', compact('users', 'page', 'selected', 'id_penduduk'));
    }
}
