<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KartuKeluargaModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PendudukController extends Controller
{
    public function daftarPendudukViewAdmin()
    {
        $page = 'daftarPenduduk';
        $selected = 'Kependudukan';

        $user = PendudukModel::paginate(10);

        return view('admin.kependudukan.index', compact('user', 'page', 'selected'));
    }

    public function storePenduduk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'nkk' => 'required',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'agama' => 'required',
            'statusPernikahan' => 'required',
            'statusPenduduk' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'gaji' => 'required|integer',
        ]);

        PendudukModel::create([
            'nik' => $request->nik,
            'niKeluarga' => $request->nkk,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'agama' => $request->agama,
            'statusNikah' => $request->statusPernikahan,
            'statusDiRw' => $request->statusPenduduk,
            'pekerjaan' => $request->pekerjaan,
            'warganegara' => $request->kewarganegaraan,
            'alamat' => $request->alamat,
            'noRt' => $request->rt,
            'gaji' => $request->gaji,
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        return redirect('/admin/kependudukan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function updatePenduduk(Request $request, string $nik)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'nkk' => 'required',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'agama' => 'required',
            'statusPernikahan' => 'required',
            'statusPenduduk' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'gaji' => 'required|numeric'
        ]);

        // dd(request()->all());

        PendudukModel::find($nik)->update([
            'nik' => $request->nik,
            'niKeluarga' => $request->nkk,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'agama' => $request->agama,
            'statusNikah' => $request->statusPernikahan,
            'statusDiRw' => $request->statusPenduduk,
            'pekerjaan' => $request->pekerjaan,
            'warganegara' => $request->kewarganegaraan,
            'alamat' => $request->alamat,
            'noRt' => $request->rt,
            'gaji' => $request->gaji,
        ]);

        // dd($update);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

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

    public function filterPenduduk(Request $request)
    {
        $page = 'daftarPenduduk';
        $selected = 'Kependudukan';

        $user = PendudukModel::where('jenisKelamin', 'like', '%' . $request->jenisKelamin . '%')
            ->orWhere('noRt', 'like', '%' . $request->rt . '%')
            ->orWhere('agama', 'like', '%' . $request->agama . '%')
            ->orWhere('statusNikah', 'like', '%' . $request->statusPernikahan . '%')
            ->orWhere('wargaNegara', 'like', '%' . $request->kewarganegaraan . '%')
            ->orWhere('statusDiRw', 'like', '%' . $request->statusPenduduk . '%')
            ->paginate(10);

        return view('admin.kependudukan.index', compact('user', 'page', 'selected'));
    }

    public function searchPenduduk(Request $request)
    {
        $page = 'daftarPenduduk';
        $selected = 'Kependudukan';

        $user = PendudukModel::where('nik', 'like', '%' . $request->search . '%')
            ->orWhere('nama', 'like', '%' . $request->search . '%')
            ->orWhere('tempatLahir', 'like', '%' . $request->search . '%')
            ->orWhere('noRt', 'like', '%' . $request->search . '%')
            ->paginate(10);

        return view('admin.kependudukan.index', compact('user', 'page', 'selected'));
    }

    public function daftarNkkViewAdmin()
    {
        $page = 'daftarNkk';
        $selected = 'Kependudukan';

        $user = KartuKeluargaModel::paginate(10);

        return view('admin.kependudukan.daftar-nkk', compact('user', 'page', 'selected'));
    }
}
