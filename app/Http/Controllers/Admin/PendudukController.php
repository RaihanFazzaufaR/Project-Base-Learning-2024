<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function updatePenduduk(Request $request, PendudukModel $nik)
    {
        // $page = 'editPenduduk';
        // $selected = 'Kependudukan';

        // $penduduk = PendudukModel::find($nik);

        // dd($penduduk);

        // return view('admin.kependudukan.index', compact('penduduk', 'page', 'selected'));
    }
    public function daftarAkunViewAdmin()
    {
        $page = 'daftarAkun';
        $selected = 'Kependudukan';

        return view('admin.kependudukan.index')->with([
            'page' => $page,
            'selected' => $selected
        ]);
    }
    public function daftarNkkViewAdmin()
    {
        $page = 'daftarNkk';
        $selected = 'Kependudukan';

        return view('admin.kependudukan.index')->with([
            'page' => $page,
            'selected' => $selected
        ]);
    }
}
