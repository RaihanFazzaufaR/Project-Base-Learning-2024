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

        if($request->filled('aduan_id')) {
            $aduan_id = $request->aduan_id;
        } elseif($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
            $complaints->where('judul', 'like', $searchTerm);
        } elseif($request->all()) {
            $complaints->where(function($query) use ($request) {
                if($request->filled('status')) {
                    $query->where('status', $request->status);
                }
            });
        }
        
        $complaints = $complaints->paginate(10)->withQueryString();

        return view('admin.pengaduan.index', compact('page', 'selected', 'complaints', 'aduan_id'));
    }

    public function addResponse(Request $request){
        $imageName = null;

        if($request->konten_respon == null && $request->image == null) {
            return redirect()->back()->with('error', 'Konten respon tidak boleh kosong');
        }

        if($request->image != null) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time() .'.'. $request->image->getClientOriginalName();
        }
        $request->file('image')->move(public_path('assets/images/Respon'), $imageName);

        ResponModel::create([
            'aduan_id' => $request->aduan_id,
            'perespon_id' => $request->perespon_id,
            'konten_respon' => $request->konten_respon ? $request->konten_respon : null,
            'image' => $imageName ? $imageName : null,
            'dibuat_tanggal' => date('Y-m-d')
        ]);

        return redirect()->route('pengaduan-admin');
    }
}
