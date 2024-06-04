<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AduanModel;
use Illuminate\Http\Request;
use App\Models\ResponModel;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {

        $page = 'pengaduan';
        $selected = 'Pengaduan';
        $aduan_id = session('aduan_id', 0);
        $complaints = AduanModel::query();

        $searchTerm = $request->filled('search') ? $request->search : session('search');
        if ($searchTerm) {
            $searchTerm = '%' . $searchTerm . '%';
            $complaints->where('judul', 'like', $searchTerm)
                ->orWhereHas('penduduk', function ($query) use ($searchTerm) {
                    $query->where('nama', 'like', $searchTerm);
                });
        }

        $status = $request->filled('status') ? $request->status : session('status');
        $prioritas = $request->filled('prioritas') ? $request->prioritas : session('prioritas');
        if ($status || $prioritas) {
            $complaints->where(function ($query) use ($status, $prioritas) {
                if ($status) {
                    $query->where('status', $status);
                }
                if ($prioritas) {
                    $query->where('prioritas', $prioritas);
                }
            });
        }

        $complaints = $complaints->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        return view('Admin.Pengaduan.index', compact('page', 'selected', 'complaints', 'aduan_id'));
    }

    public function addResponse(Request $request)
    {
        $imageName = null;

        if ($request->konten_respon == null && $request->image == null) {
            return redirect()->back()->with('error', 'Konten respon tidak boleh kosong');
        }

        if ($request->image != null) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time() . '.' . $request->image->getClientOriginalName();
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

            return redirect()->route('pengaduan-admin', $redirectParams)
                ->withInput()
                ->with([
                    'aduan_id' => $request->aduan_id,
                    'search' => $request->search,
                    'status' => $request->status,
                    'prioritas' => $request->prioritas
                ]);
        } else {
            return redirect()->route('pengaduan-admin')->withInput()->with('aduan_id', $request->aduan_id);
        }
    }

    public function updateStatusOutside(Request $request, $aduan_id)
    {

        $request->validate([
            'statusAduan' => 'required|string'
        ]);

        $aduan = AduanModel::find($aduan_id);
        $aduan->status = $request->statusAduan;
        $aduan->save();

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

            return redirect()->route('pengaduan-admin', $redirectParams)
                ->withInput()
                ->with([
                    'search' => $request->search,
                    'status' => $request->status,
                    'prioritas' => $request->prioritas
                ]);
        } else {
            return redirect()->route('pengaduan-admin')->withInput();
        }
    }

    public function destroyAduan(Request $request, $aduan_id)
    {
        try {
            $aduan = AduanModel::find($aduan_id);
            $imagePath = null;

            if ($aduan->image != null) {
                $imagePath = public_path('assets/images/Respon/' . $aduan->image);
            }

            // Try to delete child data, but don't treat it as an error if no rows are deleted
            ResponModel::where('aduan_id', $aduan_id)->delete();

            $redirectParams = $request->only('_token', 'search', 'status', 'prioritas', 'page');

            $deleted_aduan = AduanModel::destroy($aduan_id);

            if ($deleted_aduan) {
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $message = ['success' => 'Data berhasil dihapus!'];
            } else {
                $message = ['error' => 'Gagal menghapus data utama'];
            }

            return redirect()->route('pengaduan-admin', $redirectParams)
                ->withInput()
                ->with($message);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}
