<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermintaanSuratModel;
use App\Models\SuratModel;
use App\Models\PindahPendudukModel;
use App\Models\PendudukModel;
use App\Models\PermintaanSuratSkModel;
use App\Models\PermintaanSuratSkKematianModel;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class SuratController extends Controller
{
    public function index()
    {
        $menu = 'Surat';
        $subMenu = 'SK';
        return view('Surat.formSK', compact('menu', 'subMenu'));
    }

    public function sk()
    {
        $menu = 'Surat';
        $subMenu = 'SK';
        return view('Surat.formSK', compact('menu', 'subMenu'));
    }

    public function storeSk(Request $request)
    {
        // Validate input, adjust to your actual input names and requirements
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'ttl' => 'required|string', // Input for place and date of birth
            'jk' => 're quired|string', // Input for gender
            'agama' => 'required|string',
            'Pekerjaan' => 'required|string', // Input for job
            'noKTP' => 'required|string', // Input for ID number
            'alamat' => 'required|string',
            'keperluan' => 'required|string',
        ]);

        // Separate place and date of birth
        $ttl = explode(', ', $validatedData['ttl']);
        $tempatLahir = $ttl[0];
        $tanggalLahir = $ttl[1];

        // Find the requester (peminta_id) from tb_penduduk table using noKTP (nik)
        $penduduk = PendudukModel::where('nik', $validatedData['noKTP'])->first();

        if (!$penduduk) {
            return redirect()->back()->withErrors(['noKTP' => 'Data peminta tidak ditemukan.']);
        }

        $pemintaId = $penduduk->id_penduduk;

        // Get id_kartuKeluarga from the penduduk record
        $idKartuKeluarga = $penduduk->id_kartuKeluarga;

        // Find the nikeluarga from tb_kartukeluarga table using id_kartuKeluarga
        $kartuKeluarga = DB::table('tb_kartukeluarga')
            ->where('id_kartuKeluarga', $idKartuKeluarga)
            ->first();

        if (!$kartuKeluarga) {
            return redirect()->back()->withErrors(['noKTP' => 'Data kartu keluarga tidak ditemukan.']);
        }

        $nikeluarga = $kartuKeluarga->niKeluarga;

        // Get today's date in "yyyy-mm-dd" format
        $mintaTanggal = now()->format('Y-m-d');

        // Save the data to tb_surat table
        $createSurat = SuratModel::create([
            'peminta_id' => $pemintaId,
            'minta_tanggal' => $mintaTanggal,
            'status' => 'selesai',
            'keperluan' => $validatedData['keperluan'],
            'template_id' => 1, // Assuming a default template_id of 1

            // Fields from the validated request and related tables
            'tempatLahir' => $tempatLahir,
            'tanggalLahir' => $tanggalLahir,
            'jenisKelamin' => $validatedData['jk'] === 'Laki-laki' ? 'L' : 'P',
            'statusNikah' => $penduduk->statusNikah,
            'nik' => $validatedData['noKTP'],
            'nikeluarga' => $nikeluarga,
            'warganegara' => $penduduk->warganegara,
            'agama' => $validatedData['agama'] ?: $penduduk->agama,
            'pekerjaan' => $validatedData['Pekerjaan'] ?: $penduduk->pekerjaan,
            'alamat' => $validatedData['alamat'] ?: $penduduk->alamat,
        ]);

        // Ambil data tb_permintaansurat yang telah disimpan beserta nama dari tb_penduduk
        $surat = SuratModel::where('surat_id', $createSurat->surat_id)->first();

        $rw = PendudukModel::where('jabatan', 'Ketua RW')->first();
        $rt = PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->where('tb_penduduk.jabatan', 'Ketua RT')
            ->where('tb_kartukeluarga.rt', $penduduk->kartuKeluarga->rt)
            ->select('tb_penduduk.*', 'tb_kartukeluarga.rt')
            ->first();



        // Redirect to the view 'Surat.surat_keterangan' with the 'surat' data
        return view('Surat.surat_keterangan', compact('surat', 'rw', 'penduduk', 'rt'));
    }

    public function skPindah()
    {
        $menu = 'Surat';
        $anggotaKeluarga = PendudukModel::where('id_kartuKeluarga', Auth::user()->penduduk->id_kartuKeluarga)->get();
        $subMenu = 'SKP';
        // dd($anggotaKeluarga);
        return view('Surat.formSKpindah', compact('menu', 'anggotaKeluarga', 'subMenu'));
    }

    public function storeSkPindah(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nik' => 'required|string',
        'nama' => 'required|string',
        'ttl' => 'required|string', 
        'jk' => 'required|string', 
        'warganegara' => 'required|string',
        'alamat-pindah' => 'required|string', 
        'alasan-pindah' => 'required|string', 
        'keluarga-pindah' => 'required|integer|min:1', 
        'values' => 'required',
    ], [
        'ttl.required' => 'Kolom tempat lahir dan tanggal lahir diperlukan.',
        'warganegara.required' => 'Kolom warganegara diperlukan.',
        'alamat-pindah.required' => 'Kolom alamat pindah diperlukan.',
        'alasan-pindah.required' => 'Kolom alasan pindah diperlukan.',
        'keluarga-pindah.required' => 'Kolom keluarga yang pindah diperlukan.',
        'keluarga-pindah.min' => 'Jumlah keluarga yang pindah harus minimal 1.',
    ]);

    // Pisahkan tempat dan tanggal lahir
    $tempatTanggalLahir = explode(', ', $validatedData['ttl']);
    $tempatLahir = $tempatTanggalLahir[0];
    $tanggalLahir = $tempatTanggalLahir[1];

    // Pisahkan warganegara dan agama
    $warganegaraAgama = explode(' / ', $validatedData['warganegara']);
    $warganegara = $warganegaraAgama[0];
    $agama = $warganegaraAgama[1];

    // Temukan peminta (peminta_id) dari tabel tb_penduduk dengan menggunakan noKTP (nik)
    $penduduk = PendudukModel::where('nik', $validatedData['nik'])->first();

    if (!$penduduk) {
        return redirect()->back()->withErrors(['nik' => 'Data peminta tidak ditemukan.']);
    }

    $pemintaId = $penduduk->id_penduduk;

    $idKartuKeluarga = $penduduk->id_kartuKeluarga;

    // Temukan nikeluarga dari tabel tb_kartukeluarga dengan menggunakan id_kartuKeluarga
    $kartuKeluarga = DB::table('tb_kartukeluarga')
    ->where('id_kartuKeluarga', $idKartuKeluarga)
    ->first();

    if (!$kartuKeluarga) {
        return redirect()->back()->withErrors(['nik' => 'Data kartu keluarga tidak ditemukan.']);
    }
        $nikeluarga = $kartuKeluarga->niKeluarga;

    $keluarga = DB::table('tb_kartukeluarga')
    ->select('alamat')
    ->where('id_kartuKeluarga', $idKartuKeluarga)
    ->first();

    // Simpan data ke dalam tabel tb_surat
    $createSurat = SuratModel::create([
        'peminta_id' => $pemintaId,
        'minta_tanggal' => now()->format('Y-m-d'),
        'status' => 'selesai',
        'keperluan' => 'Surat Keterangan Pindah',
        'template_id' => 2,
        'alamat_pindah' => $validatedData['alamat-pindah'],
        'alasan_pindah' => $validatedData['alasan-pindah'],
        'jumlah_keluarga_pindah' => $validatedData['keluarga-pindah'],
        'tempatLahir' => $tempatLahir,
        'tanggalLahir' => $tanggalLahir,
        'jenisKelamin' => $validatedData['jk'] === 'Laki-laki' ? 'L' : 'P',
        'statusNikah' => $penduduk->statusNikah,
        'nik' => $validatedData['nik'],
        'warganegara' => $warganegara,
        'agama' => $agama,
        'pekerjaan' => $penduduk->pekerjaan,
        'alamat' => $keluarga->alamat,
    ]);

    $rw = PendudukModel::where('jabatan', 'Ketua RW')->first();
    $rt = PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
        ->where('tb_penduduk.jabatan', 'Ketua RT')
        ->where('tb_kartukeluarga.rt', $penduduk->kartuKeluarga->rt)
        ->select('tb_penduduk.*', 'tb_kartukeluarga.rt')
        ->first();

    $surat = SuratModel::where('surat_id', $createSurat->surat_id)->first();

        // Ambil data anggota keluarga yang akan pindah
        $data = PendudukModel::join('tb_pindahpenduduk', 'tb_penduduk.id_penduduk', '=', 'tb_pindahpenduduk.id_foreign_penduduk')
        ->where('tb_pindahpenduduk.id_foreign_surat', $createSurat->surat_id)
        ->select('tb_penduduk.nik', 'tb_penduduk.nama')
        ->get();

        $data = [];

        $id_penduduk = $request->values;
        $id_penduduk = explode(',', $id_penduduk);
        // Simpan data anggota keluarga yang ikut pindah
        foreach ($id_penduduk as $id) {
            $newData = [
                'nik' => DB::table('tb_penduduk')->where('id_penduduk', $id)->value('nik'),
                'nama' => DB::table('tb_penduduk')->where('id_penduduk', $id)->value('nama'),
                'tempatLahir' => DB::table('tb_penduduk')->where('id_penduduk', $id)->value('tempatLahir'),
                'tanggalLahir' => DB::table('tb_penduduk')->where('id_penduduk', $id)->value('tanggalLahir'),
                'jenisKelamin' => DB::table('tb_penduduk')->where('id_penduduk', $id)->value('jenisKelamin'),
                'agama' => DB::table('tb_penduduk')->where('id_penduduk', $id)->value('agama'),
                'pekerjaan' => DB::table('tb_penduduk')->where('id_penduduk', $id)->value('pekerjaan'),
                'statusNikah' => DB::table('tb_penduduk')->where('id_penduduk', $id)->value('statusNikah'),
                'warganegara' => DB::table('tb_penduduk')->where('id_penduduk', $id)->value('warganegara'),
                'id_kartuKeluarga' => $idKartuKeluarga,
            ];
            $pendudukData = DB::table('tb_penduduk')->where('id_penduduk', $id)->first([
                'nik', 'nama', 'tempatLahir', 'tanggalLahir', 'jenisKelamin', 'agama', 'pekerjaan', 'statusNikah', 'warganegara'
            ]);
            // Simpan data ke dalam tabel PindahPendudukModel
            PindahPendudukModel::create([
                'id_foreign_penduduk' => $id, // id penduduk yang ikut pindah
                'id_foreign_surat' => $createSurat->surat_id,
                'id_foreign_kk' => $idKartuKeluarga,
            ]);

            // Tambahkan data baru ke dalam variabel $data
            $data[] = $newData;
        }

    // Redirect ke view 'Surat.surat_keterangan'
    return view('Surat.surat_keterangan_pindah', compact('surat', 'data', 'rw', 'rt',));
}

    public function skKematian()
    {
        $menu = 'Surat';
        $subMenu = 'SKK';
        return view('Surat.formSKkematian', compact('menu', 'subMenu'));
    }

    public function storeSkKematian(Request $request)
    {
        // Validasi input, sesuaikan dengan kebutuhan Anda
        $request->validate([
            'nik' => 'required|string',
            'nik_pelapor' => 'required|string',
            'nama_pelapor' => 'required|string',
            'hubungan_pelapor' => 'required|string',
            'penyebab_kematian' => 'required|string',
            'tempat_meninggal' => 'required|string',
            'tanggal_wafat' => 'required|date',
        ]);

        // Mendapatkan peminta_id dari tabel tb_penduduk dengan mencocokkan NIK
        $penduduk = PendudukModel::where('nik', $request->nik)->first();

        // dd($penduduk);

        if (!$penduduk) {
            return redirect()->back()->withErrors(['nik' => 'Data orang yang meninggal tidak ditemukan.']);
        }

        // Mendapatkan data keluarga dari tabel tb_kartukeluarga berdasarkan id_kartuKeluarga dari tb_penduduk
        $keluarga = DB::table('tb_kartukeluarga')
            ->select('id_kartuKeluarga', 'niKeluarga', 'alamat')
            ->where('id_kartuKeluarga', $penduduk->id_kartuKeluarga)
            ->first();

        if (!$keluarga) {
            return redirect()->back()->withErrors(['id_kartuKeluarga' => 'Data keluarga tidak ditemukan.']);
        }

        // Simpan data ke database tb_surat
        $surat = SuratModel::create([
            'peminta_id' => $request->nik_pelapor,
            'status' => 'selesai',
            'keperluan' => $request->keperluan ? $request->keperluan : 'Surat Keterangan Kematian', // Keperluan diisi sesuai dengan jenis surat
            'template_id' => 3, // Mengisi kolom template_id dengan nilai yang sesuai

            // Fields from the validated request and related tables
            'tempatLahir' => $penduduk->tempatLahir,
            'tanggalLahir' => $penduduk->tanggalLahir,
            'jenisKelamin' => $penduduk->jenisKelamin,
            'statusNikah' => $penduduk->statusNikah,
            'nik' => $request->nik,
            'nikeluarga' => $keluarga->niKeluarga, // Menggunakan niKeluarga dari tb_kartukeluarga
            'warganegara' => $penduduk->warganegara,
            'agama' => $penduduk->agama,
            'pekerjaan' => $penduduk->pekerjaan,
            'alamat' => $keluarga->alamat, // Mengambil alamat dari tb_kartukeluarga
            'penyebab_kematian' => $request->penyebab_kematian,
            'tempat_meninggal' => $request->tempat_meninggal,
            'nama_pelapor' => $request->nama_pelapor,
            'hubungan_pelapor' => $request->hubungan_pelapor,
            'tanggal_wafat' => $request->tanggal_wafat,
        ]);

        // Calculate the age based on the date of birth (tanggalLahir) and current date
        $tanggalLahir = Carbon::parse($penduduk->tanggalLahir);
        $usia = $tanggalLahir->diffInYears(Carbon::now());

        // Ambil data surat dari database beserta nama peminta dari tabel tb_penduduk
        // $surat = SuratModel::where('surat_id', $createSurat->surat_id)->first();

        // Konversi tanggalLahir menjadi objek Carbon
        $surat->nama_wafat = PendudukModel::where('nik', $request->nik)->value('nama');
        $surat->tanggalLahir = Carbon::parse($surat->tanggalLahir);
        // Konversi tanggal_wafat menjadi objek Carbon
        $surat->tanggal_wafat = Carbon::parse($surat->tanggal_wafat);
        $surat->usia = $usia;
        $surat->penyebab_kematian = $request->penyebab_kematian;
        $surat->tempat_meninggal = $request->tempat_meninggal;
        $surat->nama_pelapor = $request->nama_pelapor;
        $surat->hubungan_pelapor = $request->hubungan_pelapor;

        $rt = PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->where('tb_penduduk.jabatan', 'Ketua RT')
            ->where('tb_kartukeluarga.rt', $penduduk->kartukeluarga->rt)
            ->select('tb_penduduk.*', 'tb_kartukeluarga.rt')
            ->first();

        // Redirect ke view 'Surat.surat_keterangan_kematian' dengan menyertakan data surat
        return view('Surat.surat_keterangan_kematian', compact('surat', 'penduduk', 'rt'));
    }


    public function suratSK()
    {
        $menu = 'Surat';
        return view('Surat.surat_keterangan', compact('menu'));
    }

    public function suratPindah()
    {
        $menu = 'Surat';
        return view('Surat.surat_keterangan_pindah', compact('menu'));
    }

    public function suratKematian()
    {
        $menu = 'Surat';
        return view('Surat.surat_keterangan_kematian', compact('menu'));
    }

    public function suratku()
    {
        $menu = 'Surat';
        $dataSurat = SuratModel::where('peminta_id', Auth::user()->penduduk->id_penduduk)
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('Surat.surat-ku', compact('dataSurat', 'menu'));
    }

    public function search(Request $request)
    {
        $menu = 'Surat';
        
        // Ambil nilai pencarian dari input
        $search = $request->input('search');
    
        // Mendapatkan id_penduduk dari user yang sedang login
        $loggedInUserId = Auth::user()->penduduk->id_penduduk;
    
        // Jika input pencarian kosong, tampilkan semua data terkait dengan user yang login
        if (empty($search)) {
            $dataSurat = SuratModel::select('tb_surat.*', 'tb_penduduk.nama')
                ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
                ->where('tb_surat.peminta_id', $loggedInUserId)
                ->orderBy('tb_surat.minta_tanggal', 'desc')
                ->paginate(10)
                ->withQueryString();
        } else {
            // Check if the search query contains keywords related to different template_ids
            if (strpos(strtolower($search), 'keterangan') !== false) {
                $templateId = 1;
            } elseif (strpos(strtolower($search), 'pindah') !== false) {
                $templateId = 2;
            } elseif (strpos(strtolower($search), 'kematian') !== false) {
                $templateId = 3;
            } else {
                $templateId = null; // If no specific keyword found, set templateId to null
            }
    
            // Build the query based on the search keyword
            $query = SuratModel::select('tb_surat.*', 'tb_penduduk.nama')
                ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
                ->where('tb_surat.peminta_id', $loggedInUserId);
    
            if (!is_null($templateId)) {
                $query->where('tb_surat.template_id', $templateId);
            } else {
                $query->where('tb_penduduk.nama', 'LIKE', "%{$search}%")
                    ->orWhereDate('tb_surat.minta_tanggal', $search);
            }
    
            $dataSurat = $query->orderBy('tb_surat.minta_tanggal', 'desc')
                ->paginate(10)
                ->withQueryString();
        }
    
        $dataSurat->getCollection()->transform(function ($item) {
            if ($item->peminta) {
                $item->nama = $item->peminta->nama;
            } else {
                $item->nama = null;
            }
            return $item;
        });
    
        return view('Surat.surat-ku', compact('dataSurat', 'menu'));
    }
    
    
    
    

    public function showSk($pemintaId, $templateId)
    {
        // Cari surat yang sesuai dengan peminta_id
        $surat = SuratModel::where('peminta_id', $pemintaId)
            ->where('template_id', $templateId)
            ->first();

        // Pastikan surat ditemukan
        if (!$surat) {
            return redirect()->back()->withErrors(['error' => 'Surat tidak ditemukan.']);
        }

        $penduduk = PendudukModel::where('id_penduduk', $pemintaId)->first();
        // $surat = SuratModel
        $rw = PendudukModel::where('jabatan', 'Ketua RW')->first();
        $rt = PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->where('tb_penduduk.jabatan', 'Ketua RT')
            ->where('tb_kartukeluarga.rt', $penduduk->kartuKeluarga->rt)
            ->select('tb_penduduk.*', 'tb_kartukeluarga.rt')
            ->first();

        // Tampilkan view 'Surat.surat_keterangan' dengan data 'surat'
        return view('Surat.surat_keterangan', compact('surat', 'rw', 'penduduk', 'rt'));
    }

    public function showSkKematian($pemintaId, $templateId)
    {
        // Retrieve the requested Surat Keterangan Kematian
        $surat = SuratModel::where('peminta_id', $pemintaId)
            ->where('template_id', $templateId)
            ->first();

        // If surat not found, redirect back with error
        if (!$surat) {
            return redirect()->back()->withErrors(['error' => 'Surat tidak ditemukan.']);
        }

        // Calculate the age based on the date of birth (tanggalLahir) and current date
        $tanggalLahir = Carbon::parse($surat->tanggalLahir);
        $usia = $tanggalLahir->diffInYears(Carbon::now());

        // Convert tanggalLahir and tanggal_wafat to Carbon objects
        $surat->tanggalLahir = Carbon::parse($surat->tanggalLahir);
        $surat->tanggal_wafat = Carbon::parse($surat->tanggal_wafat);
        $surat->nama_wafat = PendudukModel::where('nik', $surat->nik)->value('nama');
        // Add age (usia) to the surat object
        $surat->usia = $usia;

        $penduduk = PendudukModel::where('id_penduduk', $pemintaId)->first();
        $rt = PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->where('tb_penduduk.jabatan', 'Ketua RT')
            ->where('tb_kartukeluarga.rt', $penduduk->kartuKeluarga->rt)
            ->select('tb_penduduk.*', 'tb_kartukeluarga.rt')
            ->first();

        // Return the view with surat data
        return view('Surat.surat_keterangan_kematian', compact('surat', 'penduduk', 'rt'));
    }

    public function showSkPindah($pemintaId, $templateId)
    {
        // Retrieve the requested Surat Keterangan Pindah
        $surat = SuratModel::where('peminta_id', $pemintaId)
            ->where('template_id', $templateId)
            ->first();

        // If surat not found, redirect back with error
        if (!$surat) {
            return redirect()->back()->withErrors(['error' => 'Surat tidak ditemukan.']);
        }

        // Parse date of birth into Carbon object for easier manipulation
        $surat->tanggalLahir = Carbon::parse($surat->tanggalLahir);

        // Get data of family members who moved
        // $data = PindahPendudukModel::where('id_foreign_kk', $surat->id_kartuKeluarga)->get();

        $penduduk = PendudukModel::where('id_penduduk', $pemintaId)->first();
        $rw = PendudukModel::where('jabatan', 'Ketua RW')->first();
        $rt = PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')
            ->where('tb_penduduk.jabatan', 'Ketua RT')
            ->where('tb_kartukeluarga.rt', $penduduk->kartuKeluarga->rt)
            ->select('tb_penduduk.*', 'tb_kartukeluarga.rt')
            ->first();

        // Return the view with surat and data
        return view('Surat.surat_keterangan_pindah', compact('surat', 'rw', 'penduduk', 'rt'));
    }
    
}
