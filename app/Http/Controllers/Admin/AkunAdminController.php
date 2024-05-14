<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserAccountModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function storeAkun(Request $request)
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
            'id_penduduk' => 'required',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => 'required',
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

        UserAccountModel::create([
            'id_penduduk' => $request->id_penduduk,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
        ]);

        return redirect('/admin/akun-admin')->with('success', 'Data berhasil ditambahkan!');
    }

    public function updateAkun(Request $request, string $nik)
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
            'id_penduduk' => 'required',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => 'required',
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
        
        UserAccountModel::find($request->id_penduduk)->update([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
        ]);

        // dd($update);

        return redirect('/admin/akun-admin')->with('success', 'Data berhasil diupdate!');
    }

    public function destroyAkun(string $username)
    {
        // Cari user berdasarkan username
        $user = UserAccountModel::where('username', $username)->first();
    
        if (!$user) {
            // Jika user tidak ditemukan, kembalikan dengan pesan error
            return redirect('/admin/akun-admin')->with('error', 'User tidak ditemukan.');
        }
    
        try {
            // Hapus user berdasarkan primary key (user_id)
            UserAccountModel::destroy($user->user_id);
            return redirect('/admin/akun-admin')->with('success', 'Data berhasil dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/admin/akun-admin')->with('error', 'Data gagal dihapus karena masih terdapat tabel lain yang terikat dengan data ini.');
        }
    }
    
}
