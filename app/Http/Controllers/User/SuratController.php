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
        $penduduk = DB::table('tb_penduduk')
                        ->where('nik', $validatedData['noKTP'])
                        ->first();
    
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
        $surat = SuratModel::create([
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
        $surat = DB::table('tb_surat')
        ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->select('tb_surat.*', 'tb_penduduk.nama')
        ->first();
        // Redirect to the view 'Surat.surat_keterangan' with the 'surat' data
        return view('Surat.surat_keterangan', compact('surat'));
    }
    
    public function skPindah()
    {
        $menu = 'Surat';
        return view('Surat.formSKpindah', compact('menu'));
    }

    // public function storeSkPindah(Request $request)
    // {
    //     // Validate the request data
    //     $validatedData = $request->validate([
    //         'nik' => 'required',
    //         'nama' => 'required',
    //         'ttl' => 'required', // Mengubah validasi untuk memisahkan tempat dan tanggal lahir
    //         'jk' => 'required', // Menambahkan validasi untuk jenis kelamin
    //         'warganegara' => 'required', // Validasi untuk warganegara
    //         // Tambahkan aturan validasi required untuk setiap field lainnya
    //     ], [
    //         'ttl.required' => 'The tempat lahir and tanggal lahir field is required.',
    //         'warganegara.required' => 'The warganegara field is required.',
    //         // Tambahkan pesan kesalahan khusus untuk field lainnya jika diperlukan
    //     ]);
    
    //     // Memisahkan tempat dan tanggal lahir
    //     $tempatTanggalLahir = explode(',', $validatedData['ttl']);
    //     $tempatLahir = trim($tempatTanggalLahir[0]);
    //     $tanggalLahir = trim($tempatTanggalLahir[1]);

    //      // Find the requester (peminta_id) from tb_penduduk table using noKTP (nik)
    //      $penduduk = DB::table('tb_penduduk')
    //      ->where('nik', $validatedData['nik'])
    //      ->first();

    //     if (!$penduduk) {
    //         return redirect()->back()->withErrors(['nik' => 'Data peminta tidak ditemukan.']);
    //     }

    //     $pemintaId = $penduduk->id_penduduk;

    //     // Get id_kartuKeluarga from the penduduk record
    //     $idKartuKeluarga = $penduduk->id_kartuKeluarga;

    //     // Find the nikeluarga from tb_kartukeluarga table using id_kartuKeluarga
    //     $kartuKeluarga = DB::table('tb_kartukeluarga')
    //                         ->where('id_kartuKeluarga', $idKartuKeluarga)
    //                         ->first();

    //     if (!$kartuKeluarga) {
    //         return redirect()->back()->withErrors(['noKTP' => 'Data kartu keluarga tidak ditemukan.']);
    //     }

    //     $nikeluarga = $kartuKeluarga->niKeluarga;
    
    //     // Mengambil status pernikahan dari objek $penduduk
    //     $statusNikah = $penduduk->statusNikah == 'belum' ? 'belum' : 'sudah';


    
    //     // Simpan data ke dalam tb_pindahPenduduk table
    //     $pindahPenduduk = PindahPendudukModel::create([
    //         'nik' => $validatedData['nik'],
    //         'nama' => $validatedData['nama'],
    //         'tempatLahir' => $tempatLahir,
    //         'tanggalLahir' => $tanggalLahir,
    //         'jenisKelamin' => $validatedData['jk'] === 'Laki-laki' ? 'L' : 'P', // Menggunakan nilai jenis kelamin dari request
    //         'agama' => $penduduk->agama, // Menggunakan nilai agama dari peminta
    //         'pekerjaan' => $penduduk->pekerjaan,
    //         'statusNikah' => $statusNikah, // Menggunakan status pernikahan dari peminta
    //         'warganegara' => $penduduk->warganegara, // Menggunakan nilai warganegara yang telah dipisahkan
    //         // Tambahkan lebih banyak field jika diperlukan
    //     ]);
    
    //     // Simpan data ke dalam tb_surat table
    //     $surat = SuratModel::create([
    //         'peminta_id' => $pemintaId->id_penduduk, // Menggunakan id_penduduk dari peminta
    //         'minta_tanggal' => $validatedData['minta_tanggal'],
    //         'status' => $validatedData['status'],
    //         'keperluan' => $validatedData['keperluan'],
    //         'template_id' => $validatedData['template_id'],
    //         'tempatLahir' => $tempatLahir,
    //         'tanggalLahir' => $tanggalLahir,
    //         'jenisKelamin' => $validatedData['jk'], // Menggunakan nilai jenis kelamin dari request
    //         'statusNikah' => $statusNikah, // Menggunakan status pernikahan dari peminta
    //         'nik' => $validatedData['nik'],
    //         'nikeluarga' => $validatedData['nikeluarga'],
    //         'warganegara' => $validatedData['warganegara'], // Menggunakan nilai warganegara yang telah dipisahkan
    //         'agama' => $penduduk->agama, // Menggunakan nilai agama dari peminta
    //         'pekerjaan' => $penduduk->pekerjaan,
    //         'alamat' => $validatedData['alamat'],
    //         'alamat_pindah' => $validatedData['alamat_pindah'] . '. RT: ' . $validatedData['rt'] . ', RW: ' . $validatedData['rw'],
    //         'alasan_pindah' => $validatedData['alasan_pindah'],
    //         'jumlah_keluarga_pindah' => $validatedData['jumlah_keluarga_pindah']
    //     ]);
    
    //     // Return the view with the created $surat variable
    //     return view('Surat.surat_keterangan_pindah', compact('surat'));
    // }

    public function storeSkPindah(Request $request)
{
    // Validasi input, sesuaikan dengan nama dan kebutuhan aktual Anda
    $validatedData = $request->validate([
        'nik' => 'required|string',
        'nama' => 'required|string',
        'ttl' => 'required|string', // Pisahkan tempat dan tanggal lahir
        'jk' => 'required|string', // Tambahkan validasi jenis kelamin
        'warganegara' => 'required|string', // Validasi kewarganegaraan
        // Tambahkan aturan validasi required untuk setiap field lainnya
    ], [
        'ttl.required' => 'Kolom tempat lahir dan tanggal lahir diperlukan.',
        'warganegara.required' => 'Kolom warganegara diperlukan.',
        // Tambahkan pesan kesalahan khusus untuk setiap field jika diperlukan
    ]);

    // Pisahkan tempat dan tanggal lahir
    $tempatTanggalLahir = explode(', ', $validatedData['ttl']);
    $tempatLahir = $tempatTanggalLahir[0];
    $tanggalLahir = $tempatTanggalLahir[1];

    // Temukan peminta (peminta_id) dari tabel tb_penduduk dengan menggunakan noKTP (nik)
    $penduduk = DB::table('tb_penduduk')
                    ->where('nik', $validatedData['nik'])
                    ->first();

    if (!$penduduk) {
        return redirect()->back()->withErrors(['nik' => 'Data peminta tidak ditemukan.']);
    }

    $pemintaId = $penduduk->id_penduduk;

    // Dapatkan id_kartuKeluarga dari catatan penduduk
    $idKartuKeluarga = $penduduk->id_kartuKeluarga;

    // Temukan nikeluarga dari tabel tb_kartukeluarga dengan menggunakan id_kartuKeluarga
    $kartuKeluarga = DB::table('tb_kartukeluarga')
                        ->where('id_kartuKeluarga', $idKartuKeluarga)
                        ->first();

    if (!$kartuKeluarga) {
        return redirect()->back()->withErrors(['nik' => 'Data kartu keluarga tidak ditemukan.']);
    }

    $nikeluarga = $kartuKeluarga->niKeluarga;

    // Simpan data ke dalam tabel tb_pindahPenduduk
    $pindahPenduduk = PindahPendudukModel::create([
        'nik' => $validatedData['nik'],
        'nama' => $validatedData['nama'],
        'tempatLahir' => $tempatLahir,
        'tanggalLahir' => $tanggalLahir,
        'jenisKelamin' => $validatedData['jk'] === 'Laki-laki' ? 'L' : 'P', // Gunakan nilai jenis kelamin dari permintaan
        'agama' => $penduduk->agama, // Gunakan nilai agama dari peminta
        'pekerjaan' => $penduduk->pekerjaan,
        'statusNikah' => $penduduk->statusNikah === 'belum' ? 'belum' : 'sudah', // Gunakan status pernikahan dari peminta
        'warganegara' => $penduduk->warganegara, // Gunakan nilai warganegara yang telah dipisahkan
        // Tambahkan lebih banyak field jika diperlukan
    ]);

    // Simpan data ke dalam tabel tb_surat
    $surat = SuratModel::create([
        'peminta_id' => $pemintaId,
        'minta_tanggal' => now()->format('Y-m-d'), // Dapatkan tanggal hari ini dalam format "yyyy-mm-dd"
        'status' => 'selesai',
        'keperluan' => $validatedData['keperluan'],
        'template_id' => 1, // Asumsikan template_id default adalah 1

        // Kolom dari permintaan yang telah divalidasi dan tabel terkait
        'tempatLahir' => $tempatLahir,
        'tanggalLahir' => $tanggalLahir,
        'jenisKelamin' => $validatedData['jk'], // Gunakan nilai jenis kelamin dari permintaan
        'statusNikah' => $penduduk->statusNikah === 'belum' ? 'belum' : 'sudah', // Gunakan status pernikahan dari peminta
        'nik' => $validatedData['nik'],
        'nikeluarga' => $nikeluarga,
        'warganegara' => $validatedData['warganegara'], // Gunakan nilai warganegara yang telah dipisahkan
        'agama' => $penduduk->agama, // Gunakan nilai agama dari peminta
        'pekerjaan' => $penduduk->pekerjaan,
        'alamat' => $penduduk->alamat, // Gunakan alamat dari peminta
        // Tambahkan lebih banyak field jika diperlukan
    ]);

    // Redirect ke view 'Surat.surat_keterangan' dengan data 'surat'
    return view('Surat.surat_keterangan', compact('surat'));
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
            ->select('id_penduduk', 'tempatLahir', 'tanggalLahir', 'jenisKelamin', 'statusNikah', 'warganegara', 'agama', 'pekerjaan', 'id_kartuKeluarga')
            ->where('nik', $validatedData['nik'])
            ->first();
    
        if (!$penduduk) {
            return redirect()->back()->withErrors(['nik' => 'Data orang yang meninggal tidak ditemukan.']);
        }
    
        // Mendapatkan data keluarga dari tabel tb_kartukeluarga berdasarkan nomor_kk
        $keluarga = DB::table('tb_kartukeluarga')
            ->select('id_kartuKeluarga', 'niKeluarga', 'alamat')
            ->where('niKeluarga', $validatedData['nomor_kk'])
            ->first();
    
        // Get today's date in "yyyy-mm-dd" format
        $mintaTanggal = now()->format('Y-m-d');
    
        // Simpan data ke database tb_surat
        $surat = SuratModel::create([
            'peminta_id' => $penduduk->id_penduduk,
            'minta_tanggal' => $mintaTanggal,
            'status' => 'selesai',
            'keperluan' => 'Surat Keterangan Kematian', // Keperluan diisi sesuai dengan jenis surat
            'template_id' => 3, // Mengisi kolom template_id dengan nilai yang sesuai
    
            // Fields from the validated request and related tables
            'tempatLahir' => $penduduk->tempatLahir,
            'tanggalLahir' => $penduduk->tanggalLahir,
            'jenisKelamin' => $penduduk->jenisKelamin,
            'statusNikah' => $penduduk->statusNikah,
            'nik' => $validatedData['nik'],
            'nikeluarga' => $validatedData['nomor_kk'], // Menggunakan nomor_kk dari input
            'warganegara' => $penduduk->warganegara,
            'agama' => $penduduk->agama,
            'pekerjaan' => $penduduk->pekerjaan,
            'alamat' => $keluarga->alamat, // Mengambil alamat dari tb_kartukeluarga
            'penyebab_kematian' => $validatedData['penyebab_kematian'],
            'tempat_meninggal' => $validatedData['tempat_meninggal'],
            'nama_pelapor' => $validatedData['nama_pelapor'],
            'hubungan_pelapor' => $validatedData['hubungan_pelapor'],
            'tanggal_wafat' => $validatedData['tanggal_wafat'],
        ]);
    
        // Calculate the age based on the date of birth (tanggalLahir) and current date
        $tanggalLahir = Carbon::parse($penduduk->tanggalLahir);
        $usia = $tanggalLahir->diffInYears(Carbon::now());
    
        // Ambil data surat dari database beserta nama peminta dari tabel tb_penduduk
        $surat = DB::table('tb_surat')
            ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
            ->select('tb_surat.*', 'tb_penduduk.nama')
            ->first();
    
        // Konversi tanggalLahir menjadi objek Carbon
        $surat->tanggalLahir = Carbon::parse($surat->tanggalLahir);
        // Konversi tanggal_wafat menjadi objek Carbon
        $surat->tanggal_wafat = Carbon::parse($surat->tanggal_wafat);
        $surat->usia = $usia;
        $surat->penyebab_kematian = $validatedData['penyebab_kematian'];
        $surat->tempat_meninggal = $validatedData['tempat_meninggal'];
        $surat->nama_pelapor = $validatedData['nama_pelapor'];
        $surat->hubungan_pelapor = $validatedData['hubungan_pelapor'];

        // Redirect ke view 'Surat.surat_keterangan_kematian' dengan menyertakan data surat
        return view('Surat.surat_keterangan_kematian', compact('surat'));
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
        $permintaanSurat = SuratModel::select('tb_surat.*', 'tb_penduduk.nama')
        ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->orderBy('tb_surat.minta_tanggal', 'desc')
        ->paginate(10);   

        return view('Surat.surat-ku', compact('permintaanSurat', 'menu'));
    }
    public function search(Request $request)
    {
        $menu = 'Surat';
        $search = $request->search;
        $surat = PermintaanSuratModel::select('tb_permintaansurat.*', 'tb_penduduk.nama')
        ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->where('tb_penduduk.nama', 'like', '%'.$search.'%')
        ->orWhere('minta_tanggal', 'LIKE', "%{$search}%")
        ->orWhere('jenisSurat', 'LIKE', "%{$search}%")
        ->orderBy('tb_permintaansurat.minta_tanggal', 'desc')
        ->paginate(10);

        return view('Surat.surat-ku', compact('surat', 'menu'));
    }

    public function showSk($pemintaId)
    {
        // Cari surat yang sesuai dengan peminta_id
        $surat = DB::table('tb_surat')
            ->where('peminta_id', $pemintaId)
            ->first();

        // Pastikan surat ditemukan
        if (!$surat) {
            return redirect()->back()->withErrors(['error' => 'Surat tidak ditemukan.']);
        }

        // Ambil data tb_permintaansurat yang telah disimpan beserta nama dari tb_penduduk
        $surat = DB::table('tb_surat')
            ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
            ->select('tb_surat.*', 'tb_penduduk.nama')
            ->where('tb_surat.peminta_id', $pemintaId)
            ->first();

        // Tampilkan view 'Surat.surat_keterangan' dengan data 'surat'
        return view('Surat.surat_keterangan', compact('surat'));
    }

    public function showSkKematian($pemintaId)
    {
        // Cari surat yang sesuai dengan peminta_id
        $surat = DB::table('tb_surat')
            ->select('penyebab_kematian', 'tempat_meninggal', 'nama_pelapor', 'hubungan_pelapor')
            ->where('peminta_id', $pemintaId)
            ->first();
    
        // Pastikan surat ditemukan
        if (!$surat) {
            return redirect()->back()->withErrors(['error' => 'Surat tidak ditemukan.']);
        }
    
        // Ambil data tb_permintaansurat yang telah disimpan beserta nama dari tb_penduduk
        $surat = DB::table('tb_surat')
            ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
            ->select('tb_surat.*', 'tb_penduduk.nama', 'tb_penduduk.tanggalLahir')
            ->where('tb_surat.peminta_id', $pemintaId)
            ->first();
    
        // Calculate the age based on the date of birth (tanggalLahir) and current date
        $tanggalLahir = Carbon::parse($surat->tanggalLahir);
        $usia = $tanggalLahir->diffInYears(Carbon::now());
        // Konversi tanggalLahir menjadi objek Carbon
        $surat->tanggalLahir = Carbon::parse($surat->tanggalLahir);
        // Konversi tanggal_wafat menjadi objek Carbon
        $surat->tanggal_wafat = Carbon::parse($surat->tanggal_wafat);
        $surat->usia = $usia;

        // Tampilkan view 'Surat.surat_keterangan' dengan data 'surat'
        return view('Surat.surat_keterangan_kematian', compact('surat'));
    }
}
