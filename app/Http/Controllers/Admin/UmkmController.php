<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use App\Models\UmkmModel;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $page = 'listUmkm';
        $selected = 'Umkm';
        $users = PendudukModel::all();
        $umkms = UmkmModel::where('status', 'diterima')->paginate(10);
        // return $users;
        return view('admin.umkm.index', compact('users', 'umkms', 'page', 'selected'));
    }
    public function ajuanUmkm()
    {
        $page = 'ajuanUmkm';
        $selected = 'Umkm';
        $users = PendudukModel::all();
        $umkms = UmkmModel::where('status', 'diproses')->paginate(10);

        return view('admin.umkm.ajuan-umkm', compact('users', 'umkms', 'page', 'selected'));
    }
    public function umkmReject(Request $request)
    {
        $request->validate([
            'alasan' => 'required|string|max:255',
            'umkm_id' => 'required|integer',
        ]);
        // return $request->input('alasan');
        try {

            $umkm_id = $request->input('umkm_id');

            $umkm = UmkmModel::findOrFail($umkm_id);
            $umkm->update([
                'status' => 'ditolak',
                'alasan_rw' => $request->input('alasan'),
                'tanggal_ditolak' => now(),
            ]);

            return redirect()->route('ajuan-umkm-admin')->with('success', 'UMKM telah ditolak.');
        } catch (\Exception $e) {
            return redirect()->route('ajuan-umkm-admin')->with('error', 'Terjadi kesalahan saat menolak UMKM: ' . $e->getMessage());
        }
    }
    public function umkmAccept(Request $request)
    {
        $request->validate([
            'umkm_id' => 'required|integer',
        ]);
        try {

            $umkm_id = $request->input('umkm_id');

            $umkm = UmkmModel::findOrFail($umkm_id);
            $umkm->update([
                'status' => 'diterima',
                'tanggal_disetujui' => now(),
            ]);

            return redirect()->route('ajuan-umkm-admin')->with('success', 'UMKM telah diterima.');
        } catch (\Exception $e) {
            return redirect()->route('ajuan-umkm-admin')->with('error', 'Terjadi kesalahan saat menerima UMKM: ' . $e->getMessage());
        }
    }

}