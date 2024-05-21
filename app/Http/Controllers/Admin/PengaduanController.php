<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AduanModel;
use Illuminate\Http\Request;
use App\Models\ResponModel;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        $page = 'pengaduan';
        $selected = 'Pengaduan';
        $aduan_id = 0;
        $complaints = AduanModel::query();

        if (session('aduan_id')) {
            $aduan_id = session('aduan_id');
        }
        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
            $complaints->where('judul', 'like', $searchTerm)
                ->orWhereHas('penduduk', function ($query) use ($searchTerm) {
                    $query->where('nama', 'like', $searchTerm);
                });
        } elseif (session('search')) {
            $searchTerm = '%' . session('search') . '%';
            $complaints->where('judul', 'like', $searchTerm)
                ->orWhereHas('penduduk', function ($query) use ($searchTerm) {
                    $query->where('nama', 'like', $searchTerm);
                });
        } elseif (session('status') || session('prioritas')) {
            $complaints->where(function ($query) {
                if (session('status')) {
                    $query->where('status', session('status'));
                }
                if (session('prioritas')) {
                    $query->where('prioritas', session('prioritas'));
                }
            });
        } elseif ($request->all()) {
            $complaints->where(function ($query) use ($request) {
                if ($request->filled('status')) {
                    $query->where('status', $request->status);
                }
                if ($request->filled('prioritas')) {
                    $query->where('prioritas', $request->prioritas);
                }
            });
        }

        $complaints = $complaints->paginate(10)->withQueryString();

        return view('admin.pengaduan.index', compact('page', 'selected', 'complaints', 'aduan_id'));
    }

    public function addResponse(Request $request)
    {
        $imageName = null;

        if ($request->konten_respon == null && $request->image == null) {
            return redirect()->back()->with('error','Konten respon tidak boleh kosong');
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
}
