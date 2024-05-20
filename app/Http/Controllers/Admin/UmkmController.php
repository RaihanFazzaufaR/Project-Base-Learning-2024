<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use App\Models\UmkmModel;
use App\Models\UmkmKategoriModel;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\Validator;
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
        $umkmKategoris = UmkmKategoriModel::all();
        $categories = KategoriModel::all();
        return view('admin.umkm.ajuan-umkm', compact('users', 'umkms', 'page', 'selected', 'umkmKategoris', 'categories'));
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

    public function storeUmkm(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:50',
            'id_penduduk' => 'required',
            'no_wa' => 'required|string|max:50',
            'lokasi' => 'required|string|max:100',
            'buka_waktu' => 'required|date_format:H:i',
            'tutup_waktu' => 'required|date_format:H:i',
            'deskripsi' => 'nullable|string',
            'lokasi_map' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,|max:2048',
            'values' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $kategori = $request->values;
        $kategori_id = explode(',', $kategori);

        $hashedPhoto = $request->file('foto')->store('UMKM', 'umkm_images');

        $umkm = new UmkmModel([
            'nama' => $request->nama,
            'no_wa' => $request->no_wa,
            'id_pemilik' => $request->id_penduduk,
            'lokasi' => $request->lokasi,
            'buka_waktu' => $request->buka_waktu,
            'tutup_waktu' => $request->tutup_waktu,
            'deskripsi' => $request->deskripsi,
            'lokasi_map' => $request->lokasi_map,
            'foto' => isset($hashedPhoto) ? $hashedPhoto : null,
            'status' => 'diterima',
        ]);
        $umkm->save();
        $umkm_id = $umkm->getKey();
        foreach ($kategori_id as $id) {

            $umkmKategori = new UmkmKategoriModel([
                'umkm_id' => $umkm_id,
                'kategori_id' => $id,
            ]);
            $umkmKategori->save();
        }
        return redirect()->route('umkm')->with([
            'success' => 'Data UMKM berhasil ditambahkan!'
        ]);
    }

}