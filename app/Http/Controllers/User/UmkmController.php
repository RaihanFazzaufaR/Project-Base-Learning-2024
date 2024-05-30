<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KategoriModel;
use App\Models\UmkmKategoriModel;
use Illuminate\Http\Request;
use App\Models\UmkmModel;
use App\Models\PendudukModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UmkmController extends Controller
{
    public function index()
    {
        $categories = KategoriModel::all();
        $umkms = UmkmModel::where('status', 'diterima')->get();
        $umkms = $this->formatDateAndTime($umkms);
        $menu = 'UMKM';
        $kategori = 0;
        return view('Umkm.index', [
            'umkms' => $umkms,
            'categories' => $categories,
            'menu' => $menu,
            'kategori' => $kategori,
        ]);
    }

    public function formatDateAndTime($data)
    {
        foreach ($data as $value) { 
            $value->buka_waktu = Carbon::parse($value->buka_waktu)->format('H:i');
            $value->tutup_waktu = Carbon::parse($value->tutup_waktu)->format('H:i');
        }

        return $data; // Mengembalikan data yang telah diformat
    }

    public function formatDateAndTimeforDetail($data)
    {
         
            $data->buka_waktu = Carbon::parse($data->buka_waktu)->format('H:i');
            $data->tutup_waktu = Carbon::parse($data->tutup_waktu)->format('H:i');


        return $data; // Mengembalikan data yang telah diformat
    }


    public function umkmku($id_penduduk)
    {
        $menu = 'UMKM';
        $umkms = UmkmModel::where('id_pemilik', $id_penduduk)->paginate(8);
        $umkmKategoris = UmkmKategoriModel::all();
        $categories = KategoriModel::all();
        $kategori = '';
        return view('Umkm.umkmku', compact('menu', 'umkms', 'umkmKategoris', 'categories', 'kategori'));
    }


    public function getDataByCategory($kategori_id)
    {
        $categories = KategoriModel::all();
        $umkms_id = UmkmKategoriModel::where('kategori_id', $kategori_id)->pluck('umkm_id');
        $umkms = UmkmModel::whereIn('umkm_id', $umkms_id)
            ->where('status', 'diterima')
            ->get();


        $menu = 'UMKM';
        $kategori = $kategori_id;
        return view('Umkm.index', [
            'umkms' => $umkms,
            'categories' => $categories,
            'menu' => $menu,
            'kategori' => $kategori,
        ]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $categories = KategoriModel::all();
        $menu = 'UMKM';
        $umkms = UmkmModel::where('nama', 'LIKE', "%{$searchTerm}%")
            ->where('status', 'diterima')
            ->get();

        if ($umkms->isEmpty()) {
            $notification = 'Tidak ada UMKM yang ditemukan dengan nama "' . $searchTerm . '"';
        } else {
            $notification = null;
        }
        $kategori = 0;

        return view('Umkm.index', [
            'umkms' => $umkms,
            'categories' => $categories,
            'notification' => $notification,
            'menu' => $menu,
            'kategori' => $kategori,
        ]);
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
            'status' => 'diproses',
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
        $koordinat_array = array_map('trim', explode(",", $umkm->lokasi_map));
        $umkm = $this->formatDateAndTimeforDetail($umkm);

        $latitude = trim($koordinat_array[0]);
        $longtitude = trim($koordinat_array[1]);
        return view('Umkm.detail', compact('menu', 'umkm', 'latitude', 'longtitude', 'categories', 'umkmKategoris'));

    }

    public function viewDetail()
    {
        $menu = 'UMKM';
        return view('Umkm.detail', compact('menu'));

    }

    public function destroyUmkm($id_umkm)
    {
        try {
            $deleted_fk = UmkmKategoriModel::where('umkm_id', $id_umkm)->delete();

            if ($deleted_fk) {
                $deleted_umkm = UmkmModel::destroy($id_umkm);

                if ($deleted_umkm) {
                    return redirect(route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]))->with('success', 'Data berhasil dihapus!');
                } else {
                    return redirect(route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]))->with('Gagal menghapus data utama');
                }
            } else {
                return redirect(route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]))->with('Gagal menghapus data anak');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
    public function cancelPengajuan($id_umkm)
    {
        try {
            $cancel = UmkmModel::where('umkm_id', $id_umkm)->update(['status' => 'dibatalkan']);
            return redirect(route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]))->with('success', 'Status pengajuan berhasil dibatalkan.');
        } catch (\Exception $e) {
            return redirect(route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]))->with('error', 'Gagal membatalkan status pengajuan. Error: ' . $e->getMessage());
        }
    }

    public function editUmkm(Request $request, $umkm_id)
    {
        $validator = Validator::make($request->all(), [
            // 'umkm_id' => 'required',
            'nama' => 'required|string|max:50',
            'id_penduduk' => 'required',
            'no_wa' => 'nullable|string|max:50',
            'lokasi' => 'nullable|string|max:100',
            'buka_waktu' => 'nullable|date_format:H:i:s',
            'tutup_waktu' => 'nullable|date_format:H:i:s',
            'deskripsi' => 'nullable|string',
            'lokasi_map' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'values' => 'nullable',
            'alasan' => 'required|string|max:150',
        ]);
        if ($validator->fails()) {
            return $request->all();
            // return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $kategori = $request->values;
        $kategori_id = explode(',', $kategori);
        // $umkm_id = $request->umkm_id;

        $umkmData = [
            'nama' => $request->nama,
            'id_penduduk' => $request->id_penduduk,
            'no_wa' => $request->no_wa,
            'lokasi' => $request->lokasi,
            'buka_waktu' => $request->buka_waktu,
            'tutup_waktu' => $request->tutup_waktu,
            'deskripsi' => $request->deskripsi,
            'lokasi_map' => $request->lokasi_map,
            'status' => 'diproses',
            'alasan_warga' => $request->alasan,
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

        return redirect(route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]))->with('success', 'UMKM berhasil diperbarui.');
    }

    public function umkmkuSearch(Request $request)
    {
        $request->validate([
            'search' => 'required|string|max:50',
            'id_penduduk' => 'required|integer',
        ]);
        $searchTerm = $request->input('search');
        $id_penduduk = $request->input('id_penduduk');
        $menu = 'UMKM';
        $umkmKategoris = UmkmKategoriModel::all();
        $categories = KategoriModel::all();
        $kategori = '';

        $umkms = UmkmModel::where('id_pemilik', $id_penduduk)
            ->where('nama', 'like', '%' . $searchTerm . '%')
            ->orWhere('deskripsi', 'like', '%' . $searchTerm . '%')
            ->paginate(7);

        return view('Umkm.umkmku', compact('menu', 'umkms', 'umkmKategoris', 'categories', 'kategori'));
    }
}