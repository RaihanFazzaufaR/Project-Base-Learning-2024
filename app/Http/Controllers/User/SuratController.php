<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermintaanSuratModel;
use App\Models\DataSuratModel;
use App\Models\PermintaanSuratSkModel;
use App\Models\PermintaanSuratSkKematianModel;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Carbon\Carbon;


class SuratController extends Controller
{     
        public function index()
    {
        $menu = 'Surat';
        return view('Surat.formSKpindah', compact('menu'));
    }
    
    public function sk()
    {
        $menu = 'Surat';
        return view('Surat.formSK', compact('menu'));
    }

    public function storeSk(Request $request)
    {
        // Validasi input, sesuaikan dengan kebutuhan Anda
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'ttl' => 'required|string', // Sesuaikan dengan name pada input tempat dan tanggal lahir
            'jk' => 'required|string', // Sesuaikan dengan name pada input jenis kelamin
            'agama' => 'required|string',
            'Pekerjaan' => 'required|string', // Sesuaikan dengan name pada input pekerjaan
            'noKTP' => 'required|string', // Sesuaikan dengan name pada input no. KTP
            'alamat' => 'required|string',
            'keperluan' => 'required|string',
        ]);
    
        // Pisahkan tempat dan tanggal lahir
        $ttl = explode(', ', $validatedData['ttl']);
        $tempatLahir = $ttl[0];
        $tanggalLahir = $ttl[1];
    
        // Mendapatkan peminta_id dari tabel tb_penduduk dengan mencocokkan noKTP dengan nik
        $penduduk = DB::table('tb_penduduk')
                        ->where('nik', $validatedData['noKTP'])
                        ->first();
    
        if (!$penduduk) {
            return redirect()->back()->withErrors(['noKTP' => 'Data peminta tidak ditemukan.']);
        }
    
        $pemintaId = $penduduk->id_penduduk;
    
        // Ambil tanggal hari ini dalam format "yyyy-mm-dd"
        $mintaTanggal = now()->format('Y-m-d');
    
        // Simpan data ke database tb_permintaansurat
        $permintaanSurat = PermintaanSuratModel::create([
            'peminta_id' => $pemintaId,
            'minta_tanggal' => $mintaTanggal,
            'status' => 'selesai',
            'keperluan' => $validatedData['keperluan'],
            'template_id' => 1, // Mengisi kolom template_id dengan nilai 1
        ]);
    
        // Mendapatkan id kartu keluarga dari tb_penduduk
        $idKartuKeluarga = $penduduk->id_kartuKeluarga;
    
        // Mendapatkan nikeluarga dari tb_kartukeluarga berdasarkan id kartu keluarga
        $keluarga = DB::table('tb_kartukeluarga')
                        ->where('id_kartuKeluarga', $idKartuKeluarga)
                        ->first();
    
        if (!$keluarga) {
            return redirect()->back()->withErrors(['noKTP' => 'Data kartu keluarga tidak ditemukan.']);
        }
    
        $nikeluarga = $keluarga->niKeluarga;
    
        // Simpan data ke database tb_datasurat
        $dataSurat = DataSuratModel::create([
            'permintaan_id' => $permintaanSurat->permintaan_id,
            'tanggalLahir' => $tanggalLahir,
            'jenisKelamin' => $validatedData['jk'] === 'Laki-laki' ? 'L' : 'P', // Modifikasi untuk menyesuaikan jenis kelamin
            'statusNikah' => $penduduk->statusNikah, // Asumsi: diambil dari tb_penduduk jika tidak ada di input
            'nik' => $validatedData['noKTP'],
            'nikeluarga' => $nikeluarga,
            'warganegara' => $penduduk->warganegara, // Asumsi: diambil dari tb_penduduk jika tidak ada di input
            'agama' => $validatedData['agama'] ?: $penduduk->agama,
            'pekerjaan' => $validatedData['Pekerjaan'] ?: $penduduk->pekerjaan,
            'alamat' => $validatedData['alamat'] ?: $penduduk->alamat,
            'tempatLahir' => $tempatLahir, // Menambahkan tempat lahir
            'tujuan_id' => $permintaanSurat->permintaan_id, // Mengisi kolom tujuan_id dengan permintaan_id
        ]);
    
        // Ambil data tb_permintaansurat yang telah disimpan beserta nama dari tb_penduduk
        $permintaanSurat = DB::table('tb_permintaansurat')
                            ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
                            ->where('tb_permintaansurat.permintaan_id', $permintaanSurat->permintaan_id)
                            ->select('tb_permintaansurat.*', 'tb_penduduk.nama')
                            ->first();
    
        // Ambil data tb_datasurat yang sesuai dengan permintaan_id
        $dataSurat = DataSuratModel::where('permintaan_id', $permintaanSurat->permintaan_id)->first();
    
        // Redirect ke view 'Surat.surat_keterangan' dengan menyertakan variabel 'permintaanSurat' dan 'dataSurat'
        return view('Surat.surat_keterangan', compact('permintaanSurat', 'dataSurat'));
    }
    
    
    public function skPindah()
    {
        $menu = 'Surat';
        return view('Surat.formSKpindah', compact('menu'));
    }
    
    public function skKematian()
    {
        $menu = 'Surat';
        return view('Surat.formSkkematian', compact('menu'));
    }
    
    public function storeSkKematian(Request $request)
    {
        // Validasi input, sesuaikan dengan kebutuhan Anda
        $validatedData = $request->validate([
            'nik' => 'required|string',
            'nomor_kk' => 'required|string',
            'nama_pelapor' => 'required|string',
            'hubungan_pelapor' => 'required|string',
            'penyebab_kematian' => 'required|string',
            'tempat_meninggal' => 'required|string',
            'tanggal_wafat' => 'required|date',
        ]);
    
        // Mendapatkan peminta_id dari tabel tb_penduduk dengan mencocokkan NIK
        $penduduk = DB::table('tb_penduduk')
            ->select('id_penduduk','tempatLahir', 'tanggalLahir', 'jenisKelamin', 'statusNikah', 'warganegara', 'agama', 'pekerjaan', 'id_kartuKeluarga')
            ->where('nik', $validatedData['nik'])
            ->first();
    
        if (!$penduduk) {
            return redirect()->back()->withErrors(['nik' => 'Data orang yang meninggal tidak ditemukan.']);
        }
    
        $pemintaId = $penduduk->id_penduduk;
    
        // Ambil tanggal hari ini dalam format "yyyy-mm-dd"
        $mintaTanggal = now()->format('Y-m-d');
    
        // Simpan data ke database tb_permintaansurat
        $permintaanSurat = PermintaanSuratModel::create([
            'peminta_id' => $pemintaId,
            'minta_tanggal' => $mintaTanggal,
            'status' => 'selesai',
            'keperluan' => 'Surat Keterangan Kematian', // Keperluan diisi sesuai dengan jenis surat
            'template_id' => 3, // Mengisi kolom template_id dengan nilai yang sesuai
        ]);
    
        // Mendapatkan alamat dari tb_kartukeluarga berdasarkan nomor_kk
        $keluarga = DB::table('tb_kartukeluarga')
            ->select('id_kartuKeluarga', 'niKeluarga', 'alamat')
            ->where('niKeluarga', $validatedData['nomor_kk'])
            ->first();
    
        if (!$keluarga) {
            return redirect()->back()->withErrors(['nomor_kk' => 'Data kartu keluarga tidak ditemukan.']);
        }
    
        $idKartuKeluarga = $keluarga->id_kartuKeluarga;
        $nikeluarga = $keluarga->niKeluarga;
        $alamat = $keluarga->alamat;
        $tempatLahir = $penduduk->tempatLahir;
    
        // Simpan data ke database tb_datasurat
        $dataSurat = DataSuratModel::create([
            'permintaan_id' => $permintaanSurat->permintaan_id,
            'tanggalLahir' => $penduduk->tanggalLahir,
            'tempatLahir' => $penduduk->tempatLahir,
            'jenisKelamin' => $penduduk->jenisKelamin,
            'statusNikah' => $penduduk->statusNikah,
            'nik' => $validatedData['nik'],
            'nikeluarga' => $nikeluarga,
            'warganegara' => $penduduk->warganegara,
            'agama' => $penduduk->agama,
            'pekerjaan' => $penduduk->pekerjaan,
            'alamat' => $alamat, // Mengambil alamat dari tb_kartukeluarga
            'penyebab_kematian' => $validatedData['penyebab_kematian'],
            'tempat_meninggal' => $validatedData['tempat_meninggal'],
            'nama_pelapor' => $validatedData['nama_pelapor'],
            'hubungan_pelapor' => $validatedData['hubungan_pelapor'],
            'tanggal_wafat' => $validatedData['tanggal_wafat'],
        ]);
    
        // Menghitung usia menggunakan Carbon
        $tanggalLahir = Carbon::parse($penduduk->tanggalLahir);
        $usia = $tanggalLahir->diffInYears(Carbon::now());
    
        // Ambil data tb_permintaansurat yang telah disimpan beserta nama dari tb_penduduk
        $permintaanSuratKematian = DB::table('tb_permintaansurat')
            ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
            ->where('tb_permintaansurat.permintaan_id', $permintaanSurat->permintaan_id)
            ->select('tb_permintaansurat.*', 'tb_penduduk.nama')
            ->first();
    
        // Ambil data tb_datasurat yang sesuai dengan permintaan_id
        $dataSuratKematian = DataSuratModel::where('permintaan_id', $permintaanSurat->permintaan_id)->first();
    
        // Tambahkan usia dan nomor_kk ke objek $dataSuratKematian
        $dataSuratKematian->usia = $usia;
        $dataSuratKematian->nomor_kk = $nikeluarga; // Menambahkan nomor_kk dari $nikeluarga
        $dataSuratKematian->tempatLahir;

        // Redirect ke view 'Surat.surat_keterangan_kematian' dengan menyertakan variabel 'permintaanSuratKematian' dan 'dataSuratKematian'
        return view('Surat.surat_keterangan_kematian', compact('permintaanSuratKematian', 'dataSuratKematian'));
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
        $permintaanSurat = PermintaanSuratModel::select('tb_permintaansurat.*', 'tb_penduduk.nama')
        ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->orderBy('tb_permintaansurat.minta_tanggal', 'desc')
        ->paginate(10);   

        return view('Surat.surat-ku', compact('permintaanSurat', 'menu'));
    }
    public function search(Request $request)
    {
        $menu = 'Surat';
        $search = $request->search;
        $permintaanSurat = PermintaanSuratModel::select('tb_permintaansurat.*', 'tb_penduduk.nama')
        ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->where('tb_penduduk.nama', 'like', '%'.$search.'%')
        ->orWhere('minta_tanggal', 'LIKE', "%{$search}%")
        ->orWhere('jenisSurat', 'LIKE', "%{$search}%")
        ->orderBy('tb_permintaansurat.minta_tanggal', 'desc')
        ->paginate(10);

        return view('Surat.surat-ku', compact('permintaanSurat', 'menu'));
    }

    // public function index()
    // {
    //     $menu = 'Surat';
    //     return view('Surat.formSK', compact('menu'));
    //     return view('Surat.formSKPindah', compact('menu'));
    //     return view('Surat.formSKkematian', compact('menu'));
    // }
    // public function formSK(Request $request){
    //     redirect()->route('sk-pindah');
    // }
    // public function skPindah()
    // {
    //     $menu = 'Surat';
    //     // return view('Surat.formSK', compact('menu'));
    //     return view('Surat.surat_keterangan_pindah', compact('menu'));
    //     // return view('Surat.formSKkematian', compact('menu'));
    // }
    
    // public function suratku()
    // {
    //     $menu = 'Surat';
    //     $permintaanSurat = PermintaanSuratModel::select('tb_permintaansurat.*', 'tb_penduduk.nama', 'tb_template.jenisSurat')
    //     ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
    //     ->join('tb_template', 'tb_permintaansurat.template_id', '=', 'tb_template.template_id')
    //     // ->where('tb_permintaansurat.status', 'menunggu') // Hanya data dengan status 'menunggu'
    //     ->orderBy('tb_permintaansurat.minta_tanggal', 'desc') // Urutkan berdasarkan tanggal terbaru
    //     ->paginate(10);

    //     return view('Surat.surat-ku', compact('permintaanSurat','menu'));
    //     // // return view('Surat.formSK', compact('menu'));
    //     // return view('Surat.surat-ku', compact('menu'));
    //     // // return view('Surat.formSKkematian', compact('menu'));
    // }
}
