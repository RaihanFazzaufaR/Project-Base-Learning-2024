<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use App\Models\UmkmKategoriModel;
use App\Models\UmkmModel;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $page = 'listUmkm';
        $selected = 'Umkm';

        $user = PendudukModel::paginate(10);
        $umkmKategoris = UmkmKategoriModel::all();
        $categories = KategoriModel::all();
        $umkms = UmkmModel::select('tb_umkm.*', 'tb_penduduk.nama as pemilik')
            ->join('tb_penduduk', 'tb_umkm.id_pemilik', '=', 'tb_penduduk.id_penduduk')
            ->where('status', 'diterima')
            ->paginate(10);
        // return $umkms;
        return view('Admin.Umkm.index', compact('user', 'page', 'selected', 'umkmKategoris', 'categories', 'umkms'));
    }
    public function ajuanUmkm()
    {
        $page = 'ajuanUmkm';
        $selected = 'Umkm';
        // $user = PendudukModel::paginate(10);
        $umkmKategoris = UmkmKategoriModel::all();
        $categories = KategoriModel::all();
        $umkms = UmkmModel::select('tb_umkm.*', 'tb_penduduk.nama as pemilik')
            ->join('tb_penduduk', 'tb_umkm.id_pemilik', '=', 'tb_penduduk.id_penduduk')
            ->where('status', 'diproses')
            ->paginate(10);
        return view('Admin.Umkm.ajuan-umkm', compact('umkms', 'page', 'selected', 'umkmKategoris', 'categories'));
    }
    public function umkmReject(Request $request)
    {
        $request->validate([
            'alasan' => 'required|string|max:255',
            'umkm_id' => 'required|integer',
        ]);
        // return $request->input('alasan');
        try {

            $umkm_id = $request->umkm_id;

            $umkm = UmkmModel::findOrFail($umkm_id);
            $umkm->update([
                'status' => 'ditolak',
                'alasan_rw' => $request->alasan,
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

    public function storeUmkmAdmin(Request $request)
    {

        // $file = $request->file('foto');

        // if ($file) {
        //     $filename = $file->getClientOriginalName();
        //     $mimeType = $file->getClientMimeType();
        //     $fileSize = $file->getSize();

        //     echo "Nama File: " . $filename . "<br>";
        //     echo "Tipe File: " . $mimeType . "<br>";
        //     echo "Ukuran File: " . $fileSize . " bytes<br>";
        // } else {

        //     echo "Tidak ada file yang diunggah.";
        //     return $request->all();

        // }
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:50',
            'pemilik' => 'required|string',
            'no_wa' => 'required|string|max:50',
            'lokasi' => 'required|string|max:100',
            'buka_waktu' => 'required|date_format:H:i',
            'tutup_waktu' => 'required|date_format:H:i',
            'deskripsi' => 'nullable|string',
            'lokasi_map' => 'nullable|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'kategori' => 'required',
        ]);
        if ($validator->fails()) {
            // return $request->all();
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        // return $request->all();
        $pemilik = $request->input('pemilik');
        $penduduk = PendudukModel::where('nama', $pemilik)->first();
        $id_penduduk = $penduduk->id_penduduk;

        $kategori = $request->kategori;
        $kategori_id = explode(',', $kategori);

        $hashedPhoto = $request->file('foto')->store('UMKM', 'umkm_images');

        $umkm = new UmkmModel([
            'nama' => $request->nama,
            'no_wa' => $request->no_wa,
            'id_pemilik' => $id_penduduk,
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
        return redirect()->route('umkm-admin')->with([
            'success' => 'Data UMKM berhasil ditambahkan!'
        ]);
    }
    public function editUmkm(Request $request, $umkm_id)
    {
        $validator = Validator::make($request->all(), [
            // 'umkm_id' => 'required',
            'nama' => 'required|string|max:50',
            // 'id_penduduk' => 'required',
            'no_wa' => 'nullable|string|max:50',
            'lokasi' => 'nullable|string|max:100',
            'buka_waktu' => 'nullable|date_format:H:i:s',
            'tutup_waktu' => 'nullable|date_format:H:i:s',
            'deskripsi' => 'nullable|string',
            'lokasi_map' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori' => 'nullable',
            // 'alasan' => 'required|string|max:150',
        ]);
        if ($validator->fails()) {
            // return $request->all();
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $kategori = $request->kategori;
        $kategori_id = explode(',', $kategori);
        // $umkm_id = $request->umkm_id;

        $umkmData = [
            'nama' => $request->nama,
            // 'id_penduduk' => $request->id_penduduk,
            'no_wa' => $request->no_wa,
            'lokasi' => $request->lokasi,
            'buka_waktu' => $request->buka_waktu,
            'tutup_waktu' => $request->tutup_waktu,
            'deskripsi' => $request->deskripsi,
            'lokasi_map' => $request->lokasi_map,
            'status' => 'diterima',
            // 'alasan_warga' => $request->alasan,
        ];

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('UMKM', 'umkm_images');
            $umkmData['foto'] = $fotoPath;
        }

        // Hapus field yang memiliki nilai null dari array $umkmData
        $umkmData = array_filter($umkmData, function ($value) {
            return !is_null($value);
        });

        UmkmModel::find($umkm_id)->update($umkmData);
        if (!is_null($kategori)) {
            UmkmKategoriModel::where('umkm_id', $umkm_id)->delete();
            foreach ($kategori_id as $id) {
                $umkmKategori = new UmkmKategoriModel([
                    'umkm_id' => $umkm_id,
                    'kategori_id' => $id,
                ]);
                $umkmKategori->save();
            }
        }

        return redirect(route('umkm-admin'))->with('success', 'UMKM berhasil diperbarui.');
    }

    public function destroyUmkm($id_umkm)
    {
        try {
            $deleted_fk = UmkmKategoriModel::where('umkm_id', $id_umkm)->delete();

            if ($deleted_fk) {
                $deleted_umkm = UmkmModel::destroy($id_umkm);

                if ($deleted_umkm) {
                    return redirect(route('umkm-admin'))->with('success', 'Data berhasil dihapus!');
                } else {
                    return redirect(route('umkm-admin'))->with('Gagal menghapus data utama');
                }
            } else {
                return redirect(route('umkm-admin'))->with('Gagal menghapus data anak');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }

    public function getDataByCategoryDaftar(Request $request)
    {
        $categories = KategoriModel::all();
        $umkms_id = UmkmKategoriModel::where('kategori_id', $request->kategori_id)->pluck('umkm_id');
        $umkms = UmkmModel::whereIn('umkm_id', $umkms_id)
            ->where('status', 'diterima')
            ->paginate(10);


        $page = 'listUmkm';
        $selected = 'Umkm';
        $users = PendudukModel::all();
        // $umkms = UmkmModel::where('status', 'diterima')->paginate(10);
        $umkmKategoris = UmkmKategoriModel::all();
        // $categories = KategoriModel::all();
        // return $users;
        return view('Admin.Umkm.index', compact('users', 'umkms', 'page', 'selected', 'umkmKategoris', 'categories'));
    }
    public function searchList(Request $request)
    {
        $page = 'listUmkm';
        $selected = 'Umkm';
        $users = PendudukModel::all();
        $umkmKategoris = UmkmKategoriModel::all();
        $categories = KategoriModel::all();

        $search = $request->input('search');

        // $umkmQuery = UmkmModel::where('status', 'diterima');
        $umkmQuery = UmkmModel::select('tb_umkm.*', 'tb_penduduk.nama as pemilik')
            ->join('tb_penduduk', 'tb_umkm.id_pemilik', '=', 'tb_penduduk.id_penduduk')
            ->where('status', 'diterima');

        if ($search) {
            $umkmQuery->where('tb_umkm.nama', 'like', '%' . $search . '%');
        }

        $umkms = $umkmQuery->paginate(10);

        return view('Admin.Umkm.index', compact('users', 'umkms', 'page', 'selected', 'umkmKategoris', 'categories'));
    }
    public function searchAjuan(Request $request)
    {
        $page = 'ajuanUmkm';
        $selected = 'Umkm';
        $users = PendudukModel::all();
        $umkmKategoris = UmkmKategoriModel::all();
        $categories = KategoriModel::all();

        $search = $request->input('search');

        $umkmQuery = UmkmModel::where('status', 'diproses');

        if ($search) {
            $umkmQuery->where('nama', 'like', '%' . $search . '%');
        }

        $umkms = $umkmQuery->paginate(10);

        return view('Admin.Umkm.ajuan-umkm', compact('users', 'umkms', 'page', 'selected', 'umkmKategoris', 'categories'));
    }

}