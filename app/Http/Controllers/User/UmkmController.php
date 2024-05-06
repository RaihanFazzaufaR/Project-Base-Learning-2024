<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KategoriModel;
use App\Models\UmkmKategoriModel;
use Illuminate\Http\Request;
use App\Models\UmkmModel;
use App\Models\PendudukModel;
use Illuminate\Support\Facades\Validator;

class UmkmController extends Controller
{
    public function index()
    {
        $categories = KategoriModel::all();
        $umkms = UmkmModel::where('status', 'diterima')->paginate(4);
        $menu = 'UMKM';


        return view('Umkm.index', [
            'umkms' => $umkms,
            'categories' => $categories,
            'menu' => $menu,
        ]);
    }

    public function umkmku($id_penduduk)
    {
        $menu = 'UMKM';
        $umkms = UmkmModel::where('id_pemilik', $id_penduduk)->get();
        // return $umkms;
        return view('umkm.umkmku', compact('menu', 'umkms'));
    }


    public function getDataByCategory($kategori_id)
    {
        $categories = KategoriModel::all();
        $umkms_id = UmkmKategoriModel::where('kategori_id', $kategori_id)->pluck('umkm_id');
        $umkms = UmkmModel::whereIn('umkm_id', $umkms_id)
            ->where('status', 'diterima')
            ->paginate(4);


        $menu = 'UMKM';
        return view('Umkm.index', [
            'umkms' => $umkms,
            'categories' => $categories,
            'menu' => $menu,
        ]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $categories = KategoriModel::all();
        $menu = 'UMKM';
        $umkms = UmkmModel::where('nama', 'LIKE', "%{$searchTerm}%")
            ->where('status', 'diterima')
            ->paginate(4);

        if ($umkms->isEmpty()) {
            $notification = 'Tidak ada UMKM yang ditemukan dengan nama "' . $searchTerm . '"';
        } else {
            $notification = null;
        }

        return view('Umkm.index', [
            'umkms' => $umkms,
            'categories' => $categories,
            'notification' => $notification,
            'menu' => $menu,
        ]);
    }

    public function storeUmkm(Request $request)
    {
        $categories = UmkmModel::distinct()->pluck('tipe');
        $umkms = UmkmModel::where('status', 'selesai')->paginate(3);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:50',
            'nama_pemilik' => 'required|string|max:50',
            'no_wa' => 'required|string|max:50',
            'lokasi' => 'required|string|max:100',
            'buka_waktu' => 'required|date_format:H:i',
            'tutup_waktu' => 'required|date_format:H:i',
            'deskripsi' => 'nullable|string',
            'lokasi_map' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,|max:2048',
        ]);
        if ($validator->fails()) {
            return $validator->messages()->all()[0];
        }
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $id_penduduk = PendudukModel::where('nama', $request->nama_pemilik)->value('id_penduduk');

        if (!$id_penduduk) {
            return back()->with('errors', 'Nama pemilik tidak ditemukan')->withInput();
        }

        if ($request->foto) {
            $fotoPath = $request->file('foto')->move('assets/images/UMKM');
        }

        $umkm = new UmkmModel([
            'nama' => $request->nama,
            'no_wa' => $request->no_wa,
            'pemilik_id' => $id_penduduk,
            'lokasi' => $request->lokasi,
            'tipe' => $request->tipe,
            'buka_waktu' => $request->buka_waktu,
            'tutup_waktu' => $request->tutup_waktu,
            'deskripsi' => $request->deskripsi,
            'lokasi_map' => $request->lokasi_map,
            'foto' => isset($fotoPath) ? $fotoPath : null,
            'status' => 'diproses',
        ]);
        $umkm->save();

        return redirect()->route('umkm')->with([
            'umkms' => $umkms,
            'categories' => $categories,
            'success' => 'Data UMKM berhasil ditambahkan!'
        ]);
    }

    public function getDetailUmkm($umkm_id)
    {
        $umkm = UmkmModel::find($umkm_id);
        if (!$umkm) {

            abort(404, 'Data UMKM tidak ditemukan');
        }
    }
}