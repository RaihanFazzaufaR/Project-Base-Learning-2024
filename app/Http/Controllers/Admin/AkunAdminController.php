<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserAccountModel;
use App\Models\PendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\LevelDetailModel;

class AkunAdminController extends Controller
{
    public function index(Request $request)
    {
        $page = 'daftarAkun';
        $selected = 'Akun';
    
        // Menggunakan UserAccountModel untuk mengambil data dan relasi dengan PendudukModel
        $users = UserAccountModel::whereHas('penduduk', function ($query) {
            $query->where('jabatan', 'Ketua RW')
                  ->orWhere('jabatan', 'Ketua RT');
        })->with('penduduk')->paginate(10)->withQueryString();
    
        // Ambil data NIK, Nama, dan Jabatan dari PendudukModel menggunakan id_penduduk dari UserAccountModel
        $users->getCollection()->transform(function ($item) {
            if ($item->penduduk) {
                $item->nik = $item->penduduk->nik;
                $item->nama = $item->penduduk->nama;
                $item->jabatan = $item->penduduk->jabatan;
            } else {
                $item->nik = null;
                $item->nama = null;
                $item->jabatan = null;
            }
            return $item;
        });
    
        return view('admin.akun-admin.index', compact('users', 'page', 'selected'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required',
            'email' => 'required|email',
            'username' => 'required|unique:tb_useraccount,username',
            'password' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000', // Image menjadi required
        ]);
    
        // Dapatkan objek PendudukModel berdasarkan NIK
        $penduduk = PendudukModel::where('nik', $request->nik)->first();
    
        if (!$penduduk) {
            // Jika NIK tidak ditemukan, tampilkan pesan warning
            return back()->with('warning', 'Warga tersebut belum terdaftar sebagai penduduk tetap.');
        }
    
        // Dapatkan level ID berdasarkan jabatan
        $level_id = in_array($penduduk->jabatan, ['Ketua RW', 'Ketua RT']) ? 2 : 1;
    
        // Jika NIK ditemukan, proses tambah akun
        $user = new UserAccountModel;
        $user->id_penduduk = $penduduk->id_penduduk;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Enkripsi password
    
        // Proses upload foto profil
        $foto = $request->file('image');
        $extension = $foto->getClientOriginalExtension(); // Dapatkan ekstensi file
        $filename = $request->username . '.' . $extension; // Buat nama file dengan format username.extension
    
        // Tentukan direktori penyimpanan berdasarkan jabatan
        $directory = in_array($penduduk->jabatan, ['Ketua RW', 'Ketua RT']) ? 'akun-admin' : 'akun-penduduk';
    
        // Simpan file dengan nama yang diinginkan
        $path = $foto->storeAs($directory, $filename, 'public');
    
        // Simpan nama file ke kolom image
        $user->image = $filename;
    
        // Simpan data user
        $user->save();
    
        // Simpan data ke tabel level_detail
        LevelDetailModel::create([
            'user_id' => $user->user_id, // Assuming primary key is 'id'
            'level_id' => $level_id,
        ]);
    
        // Redirect ke halaman yang sesuai berdasarkan jabatan
        if ($penduduk->jabatan !== 'Ketua RW' && $penduduk->jabatan !== 'Ketua RT') {
            return redirect('/admin/akun-admin/kelola-level')->with('warning', 'Jabatan tidak sesuai dengan Admin.');
        }
    
        return redirect('/admin/akun-admin')->with('success', 'Data berhasil ditambahkan!');
    }
    
    
    

    public function update(Request $request, $username)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'username' => 'required|unique:tb_useraccount,username,' . $username . ',username',
            'password' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
    
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
    
        // Find the user account by username
        $user = UserAccountModel::where('username', $username)->firstOrFail();
    
        // Update the user account details
        $user->email = $request->email;
        $user->username = $request->username;
    
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
    
        if ($request->hasFile('image')) {
            $foto = $request->file('image');
            $extension = $foto->getClientOriginalExtension();
            $filename = $request->username . '.' . $extension;
            $path = $foto->storeAs('akun-admin', $filename, 'public');
            $user->image = $filename;
        }
    
        // Save the updated user account
        $user->save();
    
        // Redirect to the appropriate page with a success message
        return redirect('/admin/akun-admin')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($username)
    {
        // Find the user account by username
        $user = UserAccountModel::where('username', $username)->firstOrFail();
    
        // Find the level detail associated with the user
        $levelDetail = LevelDetailModel::where('user_id', $user->user_id)->first();
    
        // Delete the associated records in tb_leveldetail
        LevelDetailModel::where('user_id', $user->user_id)->delete();
    
        // Delete the user account
        $user->delete();
    
        // Redirect to the appropriate page with a success message
        return redirect('/admin/akun-admin')->with('success', 'Data berhasil dihapus!');
    }
    
    
    // Fungsi untuk mendapatkan objek PendudukModel berdasarkan NIK
    private function getPendudukModel($nik) {
        return PendudukModel::where('nik', $nik)->first();
    }
    
    // Fungsi untuk memeriksa apakah penduduk memiliki jabatan yang valid
    private function hasValidJabatan($penduduk) {
        $allowedJabatan = ['Ketua RW', 'Ketua RT'];
        return in_array($penduduk->jabatan, $allowedJabatan);
    }

    public function filter(Request $request)
    {
        $page = 'daftarAkun';
        $selected = 'Akun';

        // Mengambil nilai jabatan dari request
        $jabatan = $request->input('jabatan');

        // Filter data berdasarkan jabatan yang dipilih
        $users = UserAccountModel::whereHas('penduduk', function ($query) use ($jabatan) {
            if ($jabatan) {
                $query->where('jabatan', $jabatan);
            }
        })->with('penduduk')->paginate(10)->withQueryString();

        $users->getCollection()->transform(function ($item) {
            if ($item->penduduk) {
                $item->nik = $item->penduduk->nik;
                $item->nama = $item->penduduk->nama;
                $item->jabatan = $item->penduduk->jabatan;
            } else {
                $item->nik = null;
                $item->nama = null;
                $item->jabatan = null;
            }
            return $item;
        });

        return view('admin.akun-admin.index', compact('users', 'page', 'selected'));
    }

    public function search(Request $request)
    {
        $page = 'daftarAkun';
        $selected = 'Akun';

        // Ambil nilai pencarian dari input
        $search = $request->input('search');

        // Cari data berdasarkan nik, nama, jabatan, atau username
        $users = UserAccountModel::whereHas('penduduk', function ($query) use ($search) {
            $query->where('nik', 'LIKE', "%{$search}%")
                  ->orWhere('nama', 'LIKE', "%{$search}%")
                  ->orWhere('jabatan', 'LIKE', "%{$search}%");
        })->orWhere('username', 'LIKE', "%{$search}%")
          ->with('penduduk')
          ->paginate(10)
          ->withQueryString();

        $users->getCollection()->transform(function ($item) {
            if ($item->penduduk) {
                $item->nik = $item->penduduk->nik;
                $item->nama = $item->penduduk->nama;
                $item->jabatan = $item->penduduk->jabatan;
            } else {
                $item->nik = null;
                $item->nama = null;
                $item->jabatan = null;
            }
            return $item;
        });

        return view('admin.akun-admin.index', compact('users', 'page', 'selected'));
    }
  
    public function indexPenduduk(Request $request)
    {
        $page = 'kelolaLevel';
        $selected = 'Akun';
    
        // Menggunakan UserAccountModel untuk mengambil data dan relasi dengan PendudukModel
        $users = UserAccountModel::whereHas('penduduk', function ($query) {
            $query->where('jabatan', '!=', 'Ketua RW')
                  ->where('jabatan', '!=', 'Ketua RT');
        })->with('penduduk')->paginate(10)->withQueryString();
    
        // Ambil data NIK, Nama, dan Jabatan dari PendudukModel menggunakan id_penduduk dari UserAccountModel
        $users->getCollection()->transform(function ($item) {
            if ($item->penduduk) {
                $item->nik = $item->penduduk->nik;
                $item->nama = $item->penduduk->nama;
                $item->jabatan = $item->penduduk->jabatan;
            } else {
                $item->nik = null;
                $item->nama = null;
                $item->jabatan = null;
            }
            return $item;
        });
    
        return view('admin.akun-admin.kelola-level', compact('users', 'page', 'selected'));
    }

    public function storePenduduk(Request $request)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required',
            'level_id' => 'required|in:1,2', // 2 for Admin, 3 for User
        ]);
    
        // Dapatkan objek PendudukModel berdasarkan NIK
        $penduduk = PendudukModel::where('nik', $request->nik)->first();
    
        if (!$penduduk) {
            // Jika NIK tidak ditemukan, tampilkan pesan warning
            return back()->with('warning', 'Warga tersebut belum terdaftar sebagai penduduk tetap.');
        }
    
        // Check if user already exists
        $existingUser = UserAccountModel::where('id_penduduk', $penduduk->id_penduduk)->first();
        if ($existingUser) {
            return back()->with('warning', 'Warga tersebut sudah memiliki akun.');
        }
    
        // Set the username to the first word of the name
        $firstWord = explode(' ', trim($penduduk->nama))[0];
        $username = $firstWord;
        $password = $request->nik; // Set password to NIK
    
        // Create the email based on the first word of the name
        $email = strtolower($firstWord) . '@gmail.com';
    
        // Determine the level ID based on selected level and jabatan
        $level_id = $request->level_id == 1 ? 1 : 2;
    
        // Handle mismatched level and jabatan
        if ($level_id == 1 && !in_array($penduduk->jabatan, ['Ketua RW', 'Ketua RT'])) {
            // If level is Admin but jabatan is not Ketua RW or Ketua RT
            return back()->with('warning', 'Jabatan tidak sesuai dengan Level Admin. Apakah Anda ingin tetap menyimpan?');
        } elseif ($level_id == 2 && in_array($penduduk->jabatan, ['Ketua RW', 'Ketua RT'])) {
            // If level is User but jabatan is Ketua RW or Ketua RT
            return back()->with('warning', 'Jabatan tidak sesuai dengan Level User. Apakah Anda ingin tetap menyimpan?');
        }
    
        // Proses tambah akun
        $user = new UserAccountModel;
        $user->id_penduduk = $penduduk->id_penduduk;
        $user->username = $username;
        $user->email = $email;
        $user->password = bcrypt($password); // Enkripsi password
    
        // Simpan data user
        $user->save();
    
        // Simpan data ke tabel level_detail
        LevelDetailModel::create([
            'user_id' => $user->user_id,
            'level_id' => $level_id,
        ]);
    
        // Redirect ke halaman yang sesuai berdasarkan level
        if ($level_id == 1) {
            return redirect('/admin/akun-admin')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect('/admin/akun-admin/kelola-level')->with('success', 'Data berhasil ditambahkan!');
        }
    }

    public function updatePenduduk(Request $request, $username)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'level' => 'required|in:1,2',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all())->withInput();
        }

        // Dapatkan objek UserAccountModel berdasarkan username
        $user = UserAccountModel::where('username', $username)->firstOrFail();

        // Dapatkan objek PendudukModel berdasarkan NIK
        $penduduk = PendudukModel::where('nik', $user->penduduk->nik)->first();

        // Dapatkan jabatan yang sesuai dengan level yang dipilih
        $jabatan = '';
        if ($request->level == 1) {
            $jabatan = in_array($penduduk->jabatan, ['Ketua RW', 'Ketua RT']) ? $penduduk->jabatan : 'Tidak ada';
        } else {
            $jabatan = in_array($penduduk->jabatan, ['Tidak ada', 'Sekretaris', 'Bendahara']) ? $penduduk->jabatan : 'Tidak ada';
        }

        // Update jabatan pada PendudukModel
        $penduduk->jabatan = $jabatan;
        $penduduk->save();

        // Redirect dengan pesan sukses
        return redirect('/admin/akun-admin')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroyPenduduk($username)
    {
        // Find the user account by username
        $user = UserAccountModel::where('username', $username)->firstOrFail();
    
        // Find the level detail associated with the user
        $levelDetail = LevelDetailModel::where('user_id', $user->user_id)->first();
    
        // Delete the associated records in tb_leveldetail
        LevelDetailModel::where('user_id', $user->user_id)->delete();
    
        // Delete the user account
        $user->delete();
    
        // Redirect to the appropriate page with a success message
        return redirect('/admin/akun-admin/kelola-level')->with('success', 'Data berhasil dihapus!');
    }
    
    public function filterPenduduk(Request $request)
    {
        $page = 'daftarAkun';
        $selected = 'Akun';

        // Mengambil nilai jabatan dari request
        $jabatan = $request->input('jabatan');

        // Filter data berdasarkan jabatan yang dipilih
        $users = UserAccountModel::whereHas('penduduk', function ($query) use ($jabatan) {
            if ($jabatan) {
                $query->where('jabatan', $jabatan);
            }
        })->with('penduduk')->paginate(10)->withQueryString();

        $users->getCollection()->transform(function ($item) {
            if ($item->penduduk) {
                $item->nik = $item->penduduk->nik;
                $item->nama = $item->penduduk->nama;
                $item->jabatan = $item->penduduk->jabatan;
            } else {
                $item->nik = null;
                $item->nama = null;
                $item->jabatan = null;
            }
            return $item;
        });

        return view('admin.akun-admin.kelola-level', compact('users', 'page', 'selected'));
    }

    public function searchPenduduk(Request $request)
    {
        $page = 'daftarAkun';
        $selected = 'Akun';

        // Ambil nilai pencarian dari input
        $search = $request->input('search');

        // Cari data berdasarkan nik, nama, jabatan, atau username
        $users = UserAccountModel::whereHas('penduduk', function ($query) use ($search) {
            $query->where('nik', 'LIKE', "%{$search}%")
                  ->orWhere('nama', 'LIKE', "%{$search}%")
                  ->orWhere('jabatan', 'LIKE', "%{$search}%");
        })->orWhere('username', 'LIKE', "%{$search}%")
          ->with('penduduk')
          ->paginate(10)
          ->withQueryString();

        $users->getCollection()->transform(function ($item) {
            if ($item->penduduk) {
                $item->nik = $item->penduduk->nik;
                $item->nama = $item->penduduk->nama;
                $item->jabatan = $item->penduduk->jabatan;
            } else {
                $item->nik = null;
                $item->nama = null;
                $item->jabatan = null;
            }
            return $item;
        });

        return view('admin.akun-admin.kelola-level', compact('users', 'page', 'selected'));
    }

}
