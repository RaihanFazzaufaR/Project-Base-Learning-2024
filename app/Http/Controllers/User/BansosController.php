<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AjuanBansosModel;
use App\Models\KartuKeluargaModel;
use App\Models\pendudukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BansosController extends Controller
{
    public function index()
    {
        $menu = 'Bansos';
        $user = Auth::user();

        $idKartuKeluarga = $user->penduduk->id_kartuKeluarga;

        $kepalaKeluarga = KartuKeluargaModel::find($idKartuKeluarga)->kepalaKeluarga;
        $niKeluarga = KartuKeluargaModel::find($idKartuKeluarga)->niKeluarga;

        $namaKepalaKeluarga = PendudukModel::where('NIK', $kepalaKeluarga)->value('nama');

        $ajuan_saya = AjuanBansosModel::with('kartuKeluarga')
            ->where('id_kartuKeluarga', $idKartuKeluarga)
            ->get()
            ->map(function ($ajuan) {
                $ajuan->created_at_text = $ajuan->created_at->format('F Y');
                return $ajuan;
            });
        // return $niKeluarga;
        return view('Bansos.index', compact('menu', 'ajuan_saya', 'namaKepalaKeluarga', 'niKeluarga'));
    }
    public function filterBansos(Request $request)
    {
        $menu = 'Bansos';
        $user = Auth::user();

        $idKartuKeluarga = $user->penduduk->id_kartuKeluarga;

        $kepalaKeluarga = KartuKeluargaModel::find($idKartuKeluarga)->kepalaKeluarga;
        $niKeluarga = KartuKeluargaModel::find($idKartuKeluarga)->niKeluarga;

        $namaKepalaKeluarga = PendudukModel::where('NIK', $kepalaKeluarga)->value('nama');

        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');
        // return $tahun;
        $ajuan_saya = AjuanBansosModel::with('kartuKeluarga')
            ->where('id_kartuKeluarga', $idKartuKeluarga);
        // return $request->all();
        if ($bulan && $tahun) {
            $ajuan_saya = $ajuan_saya->whereYear('created_at', $tahun)
                ->whereMonth('created_at', $bulan);

        } elseif ($tahun) {
            $ajuan_saya = $ajuan_saya->whereYear('created_at', $tahun);

        }

        $ajuan_saya = $ajuan_saya->get()->map(function ($ajuan) {
            $ajuan->created_at_text = $ajuan->created_at->format('F Y');
            return $ajuan;
        });
        // return $ajuan_saya;
        // return back()->with('ajuan_saya', $ajuan_saya)->with('namaKepalaKeluarga', $namaKepalaKeluarga)->with('niKeluarga', $niKeluarga);
        return view('Bansos.index', compact('menu', 'ajuan_saya', 'namaKepalaKeluarga', 'niKeluarga'));
    }



    public function storeBansos(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status_rumah' => 'required|string|in:Kontrak/kos,Tinggal dengan keluarga,Milik sendiri',
            'id_kartuKeluarga' => 'required|integer|',
            'tanggungan' => 'required|string|in:1,2,3,4,5,>5',
            'penghasilan_keluarga' => 'required|string|in:<1.000.000,1.000.000 - 2.000.000,2.000.000 - 3.000.000,3.000.000 - 4.000.000,4.000.000 - 5.000.000,>5.000.000',
            'luas_tempat_tinggal' => 'required|string|in:<20m,20m - 40m,40m - 60m,60m - 80m,>80m',
            'pengeluaran_listrik' => 'required|string|in:<50.000,50.000 - 100.000,100.000 - 200.000,200.000 - 300.000,>300.000',
            'foto_rumah' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'SKTM' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        $existingAjuan = AjuanBansosModel::where('id_kartuKeluarga', $request->id_kartuKeluarga)
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->exists();

        if ($existingAjuan) {
            return redirect()->route('bansos')->with(['errors' => 'Keluarga Anda Sudah Melakukan Pengajuan!']);
        }

        $hashedHome = $request->file('foto_rumah')->store('Rumah', 'bansos');
        $hashedSKTM = $request->file('SKTM')->store('SKTM', 'bansos');

        $ajuan = new AjuanBansosModel([
            'id_kartuKeluarga' => $request->id_kartuKeluarga,
            'status_rumah' => $request->status_rumah,
            'tanggungan' => $request->tanggungan,
            'penghasilan_keluarga' => $request->penghasilan_keluarga,
            'luas_tempat_tinggal' => $request->luas_tempat_tinggal,
            'pengeluaran_listrik' => $request->pengeluaran_listrik,
            'status' => 'diproses',
            'foto_rumah' => $hashedHome,
            'SKTM' => $hashedSKTM,
        ]);
        $ajuan->save();

        return redirect()->route('bansos')->with([
            'success' => 'Ajuan Berhasil Dikirim!'
        ]);

    }
}