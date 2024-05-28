<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermintaanSuratModel;
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
        return view('Surat.formSKPindah', compact('menu'));
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
        $ttl = explode(',', $validatedData['ttl']);
        $tempatLahir = $ttl[0];
        $tanggalLahir = trim($ttl[1]); // Menghapus spasi di sekitar tanggal lahir jika ada
    
        // Simpan data ke database tb_permintaansurat_sk
        $permintaanSuratSkModel = PermintaanSuratSkModel::create([
            'nama' => $validatedData['nama'],
            'tempat_lahir' => $tempatLahir,
            'tanggal_lahir' => $tanggalLahir,
            'jenis_kelamin' => $validatedData['jk'],
            'agama' => $validatedData['agama'],
            'pekerjaan' => $validatedData['Pekerjaan'],
            'no_ktp' => $validatedData['noKTP'],
            'alamat' => $validatedData['alamat'],
            'keperluan' => $validatedData['keperluan'],
        ]);
    
        // Mendapatkan peminta_id dari tabel tb_penduduk dengan mencocokkan noKTP dengan nik
        $pemintaId = DB::table('tb_penduduk')
                        ->where('nik', $validatedData['noKTP'])
                        ->value('id_penduduk');
    
        // Ambil tanggal hari ini dalam format "yyyy-mm-dd"
        $mintaTanggal = now()->format('Y-m-d');

        $nik = $validatedData['noKTP'];
        // Menghasilkan nama file
        $dateTime = Carbon::now()->format('Y-m-d'); // Format tanggal dan waktu
        $fileName = $nik . '-SuratSk-' . $dateTime . '.pdf';

        // Simpan data ke database tb_permintaansurat
        $permintaanSurat = PermintaanSuratModel::create([
            'peminta_id' => $pemintaId,
            'minta_tanggal' => $mintaTanggal,
            'status' => 'selesai',
            'keperluan' => $validatedData['keperluan'],
            'file' => $fileName, // Sementara diisi dengan default "surat_sk"
            'jenisSurat' => 1, // Mengisi kolom jenisSurat dengan angka 1
        ]);

        // Render PDF ke dalam memori
        $html = view('Surat.surat_keterangan', compact('permintaanSurat'))->render();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Dapatkan konten PDF sebagai string
        $pdfContent = $dompdf->output();

        // Simpan string PDF ke dalam file di direktori 'assets/files/Surat/'
        $filePath = public_path('assets/files/Surat/' . $fileName);
        file_put_contents($filePath, $pdfContent);
    
        // Mendapatkan data permintaan surat yang baru dibuat dari tb_permintaansurat_sk
        $permintaanSurat = PermintaanSuratSkModel::latest()->first();
    
        // Redirect ke view 'Surat.surat_keterangan' dengan menyertakan variabel 'permintaanSurat'
        return view('Surat.surat_keterangan', compact('permintaanSurat'));
    }

    public function show($fileName)
    {
        // Ambil file PDF dari direktori 'assets/files/Surat/'
        $filePath = public_path('assets/files/Surat/' . $fileName);
    
        // Jika file tidak ditemukan, kembalikan response 404
        if (!file_exists($filePath)) {
            abort(404);
        }
    
        // Mendapatkan nama file asli
        $originalFileName = 'Surat Keterangan.pdf';
    
        // Mendapatkan ekstensi file
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
    
        // Mendapatkan tipe konten file
        $mimeType = mime_content_type($filePath);
    
        // Mendapatkan ukuran file dalam byte
        $fileSize = filesize($filePath);
    
        // Mendapatkan konten file sebagai string
        $fileContent = file_get_contents($filePath);
    
        // Membuat response dengan konten file
        $response = response($fileContent, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . $originalFileName . '"',
            'Content-Length' => $fileSize,
        ]);
    
        return $response;
    }

    

    public function skPindah()
    {
        $menu = 'Surat';
        return view('Surat.formSKPindah', compact('menu'));
    }
    
    public function skKematian()
    {
        $menu = 'Surat';
        return view('Surat.formSkKematian', compact('menu'));
    }
    
    public function storeSkKematian(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'nik' => 'required|string',
            'nomor_kk' => 'required|string',
            'ttl' => 'required|string',
            'usia' => 'required|numeric',
            'jk' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'warganegara' => 'required|string',
            'alamat' => 'required|string',
            'penyebab_kematian' => 'required|string',
            'tempat_meninggal' => 'required|string',
            'nama_pelapor' => 'required|string',
            'hubungan_pelapor' => 'required|string',
            'tanggal_wafat' => 'required|date',
        ]);

                // Pisahkan tempat dan tanggal lahir
                $ttl = explode(',', $validatedData['ttl']);
                $tempatLahir = $ttl[0];
                $tanggalLahir = trim($ttl[1]); // Menghapus spasi di sekitar tanggal lahir jika ada
            
                // Simpan data ke database tb_permintaansurat_sk
                $permintaanSuratSkModel = PermintaanSuratSkKematianModel::create([
                    'nama' => $validatedData['nama'],
                    'nik' => $validatedData['nik'],
                    'nomor_kk' => $validatedData['nomor_kk'],
                    'usia' => $validatedData['usia'],
                    'tempat_lahir' => $tempatLahir,
                    'tanggal_lahir' => $tanggalLahir,
                    'jenis_kelamin' => $validatedData['jk'],
                    'agama' => $validatedData['agama'],
                    'pekerjaan' => $validatedData['pekerjaan'],
                    'warganegara' => $validatedData['warganegara'],
                    'alamat' => $validatedData['alamat'],
                    'penyebab_kematian' => $validatedData['penyebab_kematian'],
                    'tempat_meninggal' => $validatedData['tempat_meninggal'],
                    'nama_pelapor' => $validatedData['nama_pelapor'],
                    'hubungan_pelapor' => $validatedData['hubungan_pelapor'],
                    'tanggal_wafat' => $validatedData['tanggal_wafat'],
                ]);
            
                // Mendapatkan peminta_id dari tabel tb_penduduk dengan mencocokkan noKTP dengan nik
                $pemintaId = DB::table('tb_penduduk')
                                ->where('nik', $validatedData['nik'])
                                ->value('id_penduduk');
            
                // Ambil tanggal hari ini dalam format "yyyy-mm-dd"
                $mintaTanggal = now()->format('Y-m-d');
        
                $nik = $validatedData['nik'];
                // Menghasilkan nama file
                $fileName =$nik . '-SuratSk-Kematian-' . now()->format('Y-m-d') . '.pdf';
        
                // Simpan data ke database tb_permintaansurat
                $permintaanSurat = PermintaanSuratModel::create([
                    'peminta_id' => $pemintaId,
                    'minta_tanggal' => $mintaTanggal,
                    'status' => 'selesai',
                    'keperluan' => $validatedData['penyebab_kematian'],
                    'file' => $fileName, // Sementara diisi dengan default "surat_sk"
                    'jenisSurat' => 3, // Mengisi kolom jenisSurat dengan angka 2
                ]);
        

                // Mendapatkan data permintaan surat yang baru dibuat dari tb_permintaansurat_sk
                $permintaanSuratKematian = PermintaanSuratSkKematianModel::latest()->first();
                
                // Render PDF ke dalam memori
                $html = view('Surat.surat_keterangan_kematian', compact('permintaanSuratKematian'))->render();
                $dompdf = new Dompdf();
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                        
                // Dapatkan konten PDF sebagai string
                $pdfContent = $dompdf->output();
        
                // Simpan string PDF ke dalam file di direktori 'assets/files/Surat/'
                $filePath = public_path('assets/files/Surat/' . $fileName);
                file_put_contents($filePath, $pdfContent);
            
                // Mendapatkan data permintaan surat yang baru dibuat dari tb_permintaansurat_sk
                $permintaanSuratKematian = PermintaanSuratSkKematianModel::latest()->first();
            
                // Redirect ke view 'Surat.surat_keterangan' dengan menyertakan variabel 'permintaanSurat'
                return view('Surat.surat_keterangan_kematian', compact('permintaanSuratKematian'));
    
                // Mengambil tanggal_wafat dari permintaanSuratKematian
                $tanggal_wafat = $permintaanSuratKematian->tanggal_wafat;
            
                // Mengonversi tanggal_wafat menjadi format yang dapat diproses
                $tanggal_timestamp = strtotime($tanggal_wafat);
            
                // // Mengambil hanya hari dari tanggal_wafat
                // $hari_wafat = date('l', $tanggal_timestamp);
            
                // // Mengambil hanya jam, menit dan detik dari time dari datetime tanggal_wafat
                // $jam_wafat = date('H:i:s', $tanggal_timestamp);
            
                // // Menambahkan data hari_wafat dan jam_wafat ke permintaanSuratKematian
                // $permintaanSuratKematian->hari_wafat = $hari_wafat;
                // $permintaanSuratKematian->jam_wafat = $jam_wafat;
                // $permintaanSuratKematian->save();
            
                // Redirect ke view 'Surat.surat_keterangan_kematian' dengan menyertakan variabel 'permintaanSuratKematian'
                return view('Surat.surat_keterangan_kematian', compact('permintaanSuratKematian'));
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
