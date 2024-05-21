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

        $aduans = $aduans->paginate(10)->withQueryString();

        return view('aduan.index', compact('menu', 'aduans'));
    }

    public function indexAduanku(Request $request)
    {
        $menu = 'Aduanku';
        $aduans = AduanModel::query()->where('pengadu_id', auth()->user()->penduduk->id_penduduk);
        $aduan_id = 0;
        if (session('aduan_id')) {
            $aduan_id = session('aduan_id');
        }

        $aduans->when(session('search'), function ($query) {
            return $query->where('judul', 'like', '%' . session('search') . '%');
        })
            ->when(session('status'), function ($query) {
                return $query->where('status', session('status'));
            })
            ->when(session('prioritas'), function ($query) {
                return $query->where('prioritas', session('prioritas'));
            });

        $aduans->when($request->filled('search'), function ($query) use ($request) {
            return $query->where('judul', 'like', '%' . $request->search . '%');
        })
            ->when($request->prioritas != "", function ($query) use ($request) {
                return $query->where('prioritas', $request->prioritas);
            })
            ->when($request->status != "", function ($query) use ($request) {
                return $query->where('status', $request->status);
            });;

        $aduans = $aduans->paginate(10)->withQueryString();

        return view('aduan.aduanku', compact('menu', 'aduans', 'aduan_id'));
    }

    public function addResponse(Request $request)
    {
        $imageName = null;
        if ($request->konten_respon == null && $request->image == null) {
            return redirect()->back()->with('error', 'Konten respon atau gambar harus diisi')->with('aduan_id', $request->aduan_id);
        }
        if ($request->image != null) {
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

        if ($request->_token != null || $request->page != null || $request->search != null || $request->status != null || $request->prioritas != null) {
            $redirectParams = [];
            if ($request->_token != null) {
                $redirectParams['_token'] = $request->_token;
            }
            if ($request->search != null) {
                $redirectParams['search'] = $request->search;
            }
            if ($request->status != null) {
                $redirectParams['status'] = $request->status;
            }
            if ($request->prioritas != null) {
                $redirectParams['prioritas'] = $request->prioritas;
            }
            if ($request->page != null) {
                $redirectParams['page'] = $request->page;
            }

            return redirect()->route('aduanku', $redirectParams)
                ->withInput()
                ->with([
                    'aduan_id' => $request->aduan_id,
                    'search' => $request->search,
                    'status' => $request->status,
                    'prioritas' => $request->prioritas
                ]);
        } else {
            return redirect()->route('aduanku')->withInput()->with('aduan_id', $request->aduan_id);
        }
    }

    public function destroyAduan(Request $request, $aduan_id)
    {  
        try {
            $aduan = AduanModel::find($aduan_id);
            $imagePath = public_path('assets/images/Respon/' . $aduan->image);
    
            $deleted_fk = ResponModel::where('aduan_id', $aduan_id)->delete();
    
            $redirectParams = $request->only('_token', 'search', 'status', 'prioritas', 'page');
    
            if ($deleted_fk) {
                $deleted_aduan = AduanModel::destroy($aduan_id);
    
                if ($deleted_aduan) {
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                    $message = ['success' => 'Data berhasil dihapus!'];
                } else {
                    $message = ['error' => 'Gagal menghapus data utama'];
                }
            } else {
                $message = ['error' => 'Gagal menghapus data anak'];
            }
    
            return redirect()->route('aduanku', $redirectParams)
                ->withInput()
                ->with($redirectParams)
                ->with($message);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}
