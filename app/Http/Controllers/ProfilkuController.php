<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PendudukModel;
use App\Models\UserAccountModel;
use Illuminate\Support\Facades\Storage;

class ProfilkuController extends Controller
{
    public function index()
    {
        $menu = '';

        $user = Auth::user();

        $id_penduduk = $user->penduduk->id_penduduk;

        $penduduk = PendudukModel::with('userAccount', 'kartuKeluarga')
            ->where('id_penduduk', $id_penduduk)
            ->first();
        // return $penduduk;
        if (!$penduduk) {
            return redirect()->route('profilku')->with('error', 'Data penduduk tidak ditemukan');
        }

        return view('profilku', compact('menu', 'penduduk'));
    }
    public function updateAccount(Request $request)
    {
        $credentials = $request->validate(
            [
                'username' => 'required|string',
                'pw-lama' => 'required|string|min:5',
                'pw-baru' => 'nullable|string|min:5',
            ],
            [

                'pw-lama.required' => 'Password lama tidak boleh kosong.',


            ]
        );

        if (Auth::attempt(['username' => Auth::user()->username, 'password' => $credentials['pw-lama']])) {
            $user = Auth::user();
            $id_penduduk = $user->penduduk->id_penduduk;
            $data = [];

            if (!empty($credentials['pw-baru'])) {
                $data['password'] = bcrypt($credentials['pw-baru']);
                $user->password = $data['password'];
            }

            if ($user->username !== $credentials['username']) {
                $data['username'] = $credentials['username'];
                $user->username = $credentials['username'];
            }

            $userAccount = UserAccountModel::where('id_penduduk', $id_penduduk)->first();

            if ($userAccount) {
                if (!empty($data)) {
                    $userAccount->update($data);
                }

                $request->session()->regenerate();

                return back()->with('success', 'Data telah diperbarui.');
            } else {
                return back()->with('error', 'Data pengguna tidak ditemukan.');
            }
        } else {
            return back()->with('error', 'Password lama salah. Silahkan cek kembali password Anda.');
        }
    }
    public function updateFoto(Request $request)
    {
        // Validasi permintaan yang masuk
        $request->validate([
            'id_penduduk' => 'required|exists:tb_penduduk,id_penduduk',
            'imgUser' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $userAccount = UserAccountModel::where('id_penduduk', $request->id_penduduk)->first();

        if ($userAccount) {

            if ($request->hasFile('imgUser')) {

                $file = $request->file('imgUser');
                $fileName = md5(time() . $file->getClientOriginalName()) . '.' . $file->extension();
                $request->imgUser->move(public_path('assets/images/UserAccount'), $fileName);

                $userAccount->image = $fileName;
                $userAccount->save();

                return back()->with('success', 'Foto profil berhasil diperbarui.');
            }
        }

        return back()->with('error', 'Pengguna tidak ditemukan.');
    }

}