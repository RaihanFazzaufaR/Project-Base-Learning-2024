<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AduanModel;
use App\Models\ResponModel;
use Illuminate\Support\Facades\Auth;

class AduanController extends Controller
{
    public function index(Request $request)
    {
        $menu = 'Aduan';
        $aduans = AduanModel::query()->where('status', 'selesai');

        $aduans->when($request->filled('search'), function ($query) use ($request) {
            return $query->where('judul', 'like', '%' . $request->search . '%');
        })
            ->when($request->prioritas != "", function ($query) use ($request) {
                return $query->where('prioritas', $request->prioritas);
            });

        $aduans = $aduans->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        return view('Aduan.index', compact('menu', 'aduans'));
    }

    public function indexAduanku(Request $request)
    {
        $menu = 'Aduan';
        $aduans = AduanModel::query()->where('pengadu_id', auth()->user()->penduduk->id_penduduk);
        $aduan_id = session('aduan_id', 0);

        $search = $request->filled('search') ? $request->search : session('search');
        $status = $request->status != "" ? $request->status : session('status');
        $prioritas = $request->prioritas != "" ? $request->prioritas : session('prioritas');

        $aduans->when($search, function ($query) use ($search) {
            return $query->where('judul', 'like', '%' . $search . '%');
        })
            ->when($status, function ($query) use ($status) {
                return $query->where('status', $status);
            })
            ->when($prioritas, function ($query) use ($prioritas) {
                return $query->where('prioritas', $prioritas);
            });

        $aduans = $aduans->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        return view('Aduan.aduanku', compact('menu', 'aduans', 'aduan_id'));
    }

    public function addResponse(Request $request)
    {
        $imageName = null;
        if ($request->konten_respon == null && $request->image == null) {
            return redirect()->back()->with('error', 'Konten respon atau gambar harus diisi')->with('aduan_id', $request->aduan_id);
        }
        if ($request->image != null) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('assets/images/Respon'), $imageName);
        }

        ResponModel::create([
            'aduan_id' => $request->aduan_id,
            'perespon_id' => $request->perespon_id,
            'konten_respon' => $request->konten_respon ? $request->konten_respon : null,
            'image' => $imageName ? $imageName : null,
            'dibuat_tanggal' => date('Y-m-d')
        ]);

        $redirectParams = $request->only('_token', 'search', 'status', 'prioritas', 'page');

        return redirect()->route('aduanku', $redirectParams)
            ->withInput()
            ->with('aduan_id', $request->aduan_id);
    }
    public function storeAduan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'prioritasData' => 'required',
        ]);

        $imageName = null;

        if ($request->konten_aduan == null && $request->image == null) {
            return redirect()->back()->with('error', 'Konten aduan atau gambar harus diisi');
        }

        if ($request->image != null) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('assets/images/Aduan'), $imageName);
        }

        AduanModel::create([
            'judul' => $request->judul,
            'pengadu_id' => $request->pengadu_id,
            'konten_aduan' => $request->konten_aduan ? $request->konten_aduan : null,
            'image' => $imageName ? $imageName : null,
            'prioritas' => $request->prioritasData,
            'status' => 'diproses',
            'dibuat_tanggal' => date('Y-m-d')
        ]);

        $redirectParams = $request->only('_token','search', 'status', 'prioritas', 'page');

        return redirect()->route('aduanku', $redirectParams)
            ->withInput()
            ->with('success', 'Aduan berhasil ditambahkan');
    }

    public function destroyAduan(Request $request, $aduan_id)
    {
        try {
            $aduan = AduanModel::find($aduan_id);
            $imagePath = null;

            if($aduan->image != null){
                $imagePath = public_path('assets/images/Respon/' . $aduan->image);
            }
            
            // Try to delete child data, but don't treat it as an error if no rows are deleted
            ResponModel::where('aduan_id', $aduan_id)->delete();
        
            $redirectParams = $request->only('_token','search', 'status', 'prioritas', 'page');
        
            $deleted_aduan = AduanModel::destroy($aduan_id);
        
            if ($deleted_aduan) {
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $message = ['success' => 'Data berhasil dihapus!'];
            } else {
                $message = ['error' => 'Gagal menghapus data utama'];
            }
        
            return redirect()->route('aduanku', $redirectParams)
                ->withInput()
                ->with($message);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}
