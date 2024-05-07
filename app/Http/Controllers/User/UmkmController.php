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
        $umkms = UmkmModel::where('id_pemilik', $id_penduduk)->paginate(7);
        $umkmKategoris = UmkmKategoriModel::all();
        $categories = KategoriModel::all();
        $kategori = '';
        // return $umkms;
        return view('umkm.umkmku', compact('menu', 'umkms', 'umkmKategoris', 'categories', 'kategori'));
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

        $umkms = UmkmModel::where('status', 'diterima')->paginate(4);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:50',
            'id_penduduk' => 'required|integer',
            'no_wa' => 'required|string|max:50',
            'lokasi' => 'required|string|max:100',
            'buka_waktu' => 'required|date_format:H:i',
            'tutup_waktu' => 'required|date_format:H:i',
            'deskripsi' => 'nullable|string',
            'lokasi_map' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,|max:2048',
            'kategori' => 'required|array',
        ]);
        if ($validator->fails()) {
            return [$request->all()];
        }
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $hashedPhoto = $request->file('foto')->store('assets/images/UMKM');

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
            'status' => 'diproses',
        ]);
        $umkm->save();
        $umkm_id = $umkm->id;
        foreach ($request->kategori as $kategori_id) {

            $umkmKategori = new UmkmKategoriModel([
                'umkm_id' => $umkm_id,
                'kategori_id' => $kategori_id,
            ]);
            $umkmKategori->save();
        }
        return redirect()->route('umkm')->with([
            'success' => 'Data UMKM berhasil ditambahkan!'
        ]);
    }

    public function getDetailUmkm($umkm_id)
    {
        $menu = 'UMKM';
        $umkmKategoris = UmkmKategoriModel::where('umkm_id', $umkm_id)->get();
        // return $umkmKategoris;

        $categories = KategoriModel::all();
        $umkm = UmkmModel::find($umkm_id);
        if (!$umkm) {
            abort(404, 'Data UMKM tidak ditemukan');
        }
        $koordinat_array = explode(",", $umkm->lokasi_map);

        $latitude = trim($koordinat_array[0]);
        $longtitude = trim($koordinat_array[1]);
        return view('umkm.detail', compact('menu', 'umkm', 'latitude', 'longtitude', 'categories', 'umkmKategoris'));

    }

    public function viewDetail()
    {
        $menu = 'UMKM';
        return view('umkm.detail', compact('menu'));

    }

    public function destroyUmkm($id_umkm)
    {
        try {
            $deleted_fk = UmkmKategoriModel::where('umkm_id', $id_umkm)->delete();

            if ($deleted_fk) {
                $deleted_umkm = UmkmModel::destroy($id_umkm);

                if ($deleted_umkm) {
                    return redirect('umkmku')->with('success', 'Data berhasil dihapus!');
                } else {
                    return redirect('umkmku')->with('Gagal menghapus data utama');
                }
            } else {
                return redirect('umkmku')->with('Gagal menghapus data anak');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}