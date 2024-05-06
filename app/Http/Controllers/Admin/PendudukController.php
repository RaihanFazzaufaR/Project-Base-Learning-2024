<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KartuKeluargaModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $page = 'daftarPenduduk';
        $selected = 'Kependudukan';
        $kartuKeluarga = KartuKeluargaModel::all();
        $modalTambah = false;
        $id_penduduk = 0;
        $user = PendudukModel::paginate(10);

        if ($request->has('id_penduduk')) {
            $id_penduduk = $request->id_penduduk;
        } else if ($request->has('search')) {
            $user = PendudukModel::where('nik', 'like', '%' . $request->search . '%')
                ->orWhere('nama', 'like', '%' . $request->search . '%')
                ->orWhere('tempatLahir', 'like', '%' . $request->search . '%')
                ->paginate(10)->withQueryString();
        } else if ($request->all()) {
            $user = PendudukModel::where('jenisKelamin', 'like', '%' . $request->jenisKelamin . '%')
                ->orWhere('agama', 'like', '%' . $request->agama . '%')
                ->orWhere('statusNikah', 'like', '%' . $request->statusPernikahan . '%')
                ->orWhere('wargaNegara', 'like', '%' . $request->kewarganegaraan . '%')
                ->orWhere('statusPenduduk', 'like', '%' . $request->statusPenduduk . '%')
                ->orWhere('jabatan', 'like', '%' . $request->jabatan . '%')
                ->paginate(10)->withQueryString();
        }

        return view('admin.kependudukan.index', compact('user', 'page', 'selected', 'kartuKeluarga', 'modalTambah', 'id_penduduk'));
    }

    public function storePenduduk(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nik' => 'required|string|max:17|unique:tb_penduduk,nik',
            'nkk' => 'required',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'agama' => 'required',
            'statusPernikahan' => 'required',
            'statusPenduduk' => 'required',
            'pekerjaan' => 'required',
            'jabatan' => 'required',
            'kewarganegaraan' => 'required',
            'gaji' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        PendudukModel::create([
            'nik' => $request->nik,
            'id_kartuKeluarga' => $request->nkk,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'agama' => $request->agama,
            'statusNikah' => $request->statusPernikahan,
            'statusPenduduk' => $request->statusPenduduk,
            'pekerjaan' => $request->pekerjaan,
            'warganegara' => $request->kewarganegaraan,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
        ]);

        return redirect('/admin/kependudukan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function updatePenduduk(Request $request, string $nik)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|string|max:17|unique:tb_penduduk,nik,' . $nik . ',id_penduduk',
            'nkk' => 'required',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'agama' => 'required',
            'statusPernikahan' => 'required',
            'statusPenduduk' => 'required',
            'pekerjaan' => 'required',
            'jabatan' => 'required',
            'kewarganegaraan' => 'required',
            'gaji' => 'required|numeric',
        ]);

        // dd(request()->all());
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        PendudukModel::find($nik)->update([
            'nik' => $request->nik,
            'id_kartuKeluarga' => $request->nkk,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'agama' => $request->agama,
            'statusNikah' => $request->statusPernikahan,
            'statusPenduduk' => $request->statusPenduduk,
            'pekerjaan' => $request->pekerjaan,
            'warganegara' => $request->kewarganegaraan,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
        ]);

        // dd($update);

        return redirect('/admin/kependudukan')->with('success', 'Data berhasil diupdate!');
    }

    public function destroyPenduduk(string $nik)
    {
        $check = PendudukModel::find($nik);

        try {
            PendudukModel::destroy($nik);
            return redirect('/admin/kependudukan')->with('success', 'Data berhasil dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/admin/kependudukan')->with('error', 'Data penduduk gagal dihapus karena masih terdapat tabel lain yang terikat dengan data ini');
        }
    }

    public function daftarNkkViewAdmin(Request $request)
    {
        $page = 'daftarNkk';
        $selected = 'Kependudukan';
        $id_kk = 0;
        $user = KartuKeluargaModel::paginate(10);
        if ($request->has('id_kk')) {
            $id_kk = $request->id_kk;
        } else if ($request->has('search')) {
            $user = KartuKeluargaModel::where('niKeluarga', 'like', '%' . $request->search . '%')
                ->orWhere('alamat', 'like', '%' . $request->search . '%')
                ->paginate(10)->withQueryString();
        } else if ($request->all()) {
            $user = KartuKeluargaModel::where('rt', 'like', '%' . $request->rt . '%')
                ->orWhere('jmlAnggota', 'like', '%' . $request->jumlahAnggota . '%')
                ->paginate(10)->withQueryString();
        }

        return view('admin.kependudukan.daftar-nkk', compact('user', 'page', 'selected', 'id_kk'));
    }

    public function storeKartuKeluarga(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nkk' => 'required|string|max:20|unique:tb_kartukeluarga,niKeluarga',
            'jumlahAnggota' => 'required|integer',
            'kepalaKeluarga' => 'required|string',
            'alamat' => 'required|string',
            'rt' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        KartuKeluargaModel::create([
            'niKeluarga' => $request->nkk,
            'jmlAnggota' => $request->jumlahAnggota,
            'kepalaKeluarga' => $request->kepalaKeluarga,
            'alamat' => $request->alamat,
            'rt' => $request->rt
        ]);

        return redirect('/admin/kependudukan/daftar-nkk')->with('success', 'Data berhasil ditambahkan!');
    }

    public function updateKartuKeluarga(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nkk' => 'required|string|max:20|unique:tb_kartukeluarga,niKeluarga,' . $id . ',id_kartuKeluarga',
            'jumlahAnggota' => 'required|integer',
            'kepalaKeluarga' => 'required|string',
            'alamat' => 'required|string',
            'rt' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        KartuKeluargaModel::find($id)->update([
            'niKeluarga' => $request->nkk,
            'jmlAnggota' => $request->jumlahAnggota,
            'kepalaKeluarga' => $request->kepalaKeluarga,
            'alamat' => $request->alamat,
            'rt' => $request->rt
        ]);

        return redirect('/admin/kependudukan/daftar-nkk')->with('success', 'Data berhasil diupdate!');
    }

    public function destroyKartuKeluarga(string $id)
    {
        $check = KartuKeluargaModel::find($id);

        try {
            KartuKeluargaModel::destroy($id);
            return redirect('/admin/kependudukan/daftar-nkk')->with('success', 'Data berhasil dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/admin/kependudukan/daftar-nkk')->with('error', 'Data kartu keluarga gagal dihapus karena masih terdapat tabel lain yang terikat dengan data ini');
        }
    }
}
