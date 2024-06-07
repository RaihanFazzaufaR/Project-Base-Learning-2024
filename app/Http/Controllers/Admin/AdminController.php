<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AduanModel;
use App\Models\AjuanBansosModel;
use App\Models\JadwalModel;
use App\Models\KartuKeluargaModel;
use App\Models\PendudukModel;
use App\Models\UmkmModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        Carbon::setLocale('id');

        $page = 'dashboard';
        $selected = 'Dashboard';

        $jumlahKK = (auth()->user()->penduduk->jabatan == 'Ketua RW' || auth()->user()->penduduk->id_penduduk == 1) ? KartuKeluargaModel::where('niKeluarga', '!=', '0000000000000001')->count() : KartuKeluargaModel::where('niKeluarga', '!=', '0000000000000001')->where('rt', auth()->user()->penduduk->kartuKeluarga->rt)->count();
        $jumlahPenduduk = (auth()->user()->penduduk->jabatan == 'Ketua RW' || auth()->user()->penduduk->id_penduduk == 1) ? PendudukModel::where('nik', '!=', '0000000000000001')->count() : PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('nik', '!=', '0000000000000001')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count();
        $jumlahUmkm = (auth()->user()->penduduk->jabatan == 'Ketua RW' || auth()->user()->penduduk->id_penduduk == 1) ? UmkmModel::count() : UmkmModel::join('tb_penduduk', 'tb_penduduk.id_penduduk', '=', 'tb_umkm.id_pemilik')->join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count();
        $jumlahAduan = (auth()->user()->penduduk->jabatan == 'Ketua RW' || auth()->user()->penduduk->id_penduduk == 1) ? AduanModel::count() : AduanModel::join('tb_penduduk', 'tb_penduduk.id_penduduk', '=', 'tb_aduan.pengadu_id')->join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count();

        $dataJumlah = [
            'jumlahKK' => $jumlahKK,
            'jumlahPenduduk' => $jumlahPenduduk,
            'jumlahUmkm' => $jumlahUmkm,
            'jumlahAduan' => $jumlahAduan,
        ];

        $dataStatusPenduduk = [
            'tetap' => (auth()->user()->penduduk->jabatan == 'Ketua RW' || auth()->user()->penduduk->id_penduduk == 1) ? PendudukModel::where('statusPenduduk', 'penduduk tetap')->where('nik', '!=', '0000000000000001')->count() : PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('nik', '!=', '0000000000000001')->where('statusPenduduk', 'penduduk tetap')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'tidak tetap' => (auth()->user()->penduduk->jabatan == 'Ketua RW' || auth()->user()->penduduk->id_penduduk == 1) ? PendudukModel::where('statusPenduduk', 'penduduk tidak tetap')->where('nik', '!=', '0000000000000001')->count() : PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('nik', '!=', '0000000000000001')->where('statusPenduduk', 'penduduk tidak tetap')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count()
        ];

        $dataPendudukAll = (auth()->user()->penduduk->jabatan == 'Ketua RW' || auth()->user()->penduduk->id_penduduk == 1) ? PendudukModel::where('nik', '!=', '0000000000000001')->get() : PendudukModel::join('tb_kartukeluarga', 'tb_penduduk.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->where('nik', '!=', '0000000000000001')->get();
        $dataPendudukAll = $this->countAge($dataPendudukAll);

        $dataDemografiPenduduk = [
            'kategori1L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 0)->where('usia', '<=', 5)->count(),
            'kategori1P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 0)->where('usia', '<=', 5)->count(),
            'kategori2L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 6)->where('usia', '<=', 12)->count(),
            'kategori2P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 6)->where('usia', '<=', 12)->count(),
            'kategori3L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 13)->where('usia', '<=', 25)->count(),
            'kategori3P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 13)->where('usia', '<=', 25)->count(),
            'kategori4L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 26)->where('usia', '<=', 45)->count(),
            'kategori4P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 26)->where('usia', '<=', 45)->count(),
            'kategori5L' => $dataPendudukAll->where('jenisKelamin', 'L')->where('usia', '>=', 46)->count(),
            'kategori5P' => $dataPendudukAll->where('jenisKelamin', 'P')->where('usia', '>=', 46)->count(),
        ];


        $newestUmkm = UmkmModel::latest()
            ->where('status', 'diterima')
            ->limit(5)
            ->get();
        $newestUmkm = $this->formatDateAndTime($newestUmkm);


        $dataKegiatanMendatang = JadwalModel::where('mulai_tanggal', '>', date('Y-m-d'))
            ->where('status', 'selesai')
            ->orderBy('mulai_tanggal', 'asc')
            ->get();

        $dataKegiatanMendatang = $this->formatDateAndTime($dataKegiatanMendatang);

        $dataDate = JadwalModel::select(
            DB::raw('mulai_tanggal as dateStart'),
            DB::raw('YEAR(mulai_tanggal) as yearStart'),
            DB::raw('(MONTH(mulai_tanggal)-1) as monthStart'),
            DB::raw('DAY(mulai_tanggal) as dayStart'),
            DB::raw('akhir_tanggal as dateEnd'),
            DB::raw('YEAR(akhir_tanggal) as yearEnd'),
            DB::raw('(MONTH(akhir_tanggal)-1) as monthEnd'),
            DB::raw('DAY(akhir_tanggal) as dayEnd')
        )
            ->where('status', 'selesai')
            ->get();

        $yearBansos = $request->tahunBansos ?? Carbon::now()->year;

        $dataBansos = (auth()->user()->penduduk->jabatan == 'Ketua RW' || auth()->user()->penduduk->id_penduduk == 1) ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos) : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt);

        $dataBansosPerBulan = [
            'januari' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 1)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 1)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'februari' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 2)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 2)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'maret' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 3)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 3)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'april' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 4)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 4)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'mei' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 5)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 5)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'juni' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 6)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 6)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'juli' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 7)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 7)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'agustus' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 8)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 8)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'september' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 9)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 9)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'oktober' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 10)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 10)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'november' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 11)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 11)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
            'desember' => (auth()->user()->penduduk->jabatan == 'Ketua RW') ? AjuanBansosModel::where('status', 'diterima')->whereYear('created_at', $yearBansos)->whereMonth('created_at', 12)->count() : AjuanBansosModel::where('tb_ajuan_bansos.status', 'diterima')->whereYear('tb_ajuan_bansos.created_at', $yearBansos)->whereMonth('tb_ajuan_bansos.created_at', 12)->join('tb_kartukeluarga', 'tb_ajuan_bansos.id_kartuKeluarga', '=', 'tb_kartukeluarga.id_kartuKeluarga')->where('tb_kartukeluarga.rt', auth()->user()->penduduk->kartuKeluarga->rt)->count(),
        ];

        $year = [
            Carbon::now()->subYears(2)->year,
            Carbon::now()->subYear()->year,
            Carbon::now()->year,
        ];

        // dd($dataBansosPerBulan);

        return view('Admin.index', compact('page', 'selected', 'dataJumlah', 'dataStatusPenduduk', 'dataDemografiPenduduk', 'newestUmkm', 'dataKegiatanMendatang', 'dataDate', 'dataBansos', 'dataBansosPerBulan', 'year', 'yearBansos'));
    }

    private function countAge($data)
    {
        foreach ($data as $dt) {
            $dt->usia = Carbon::parse($dt->tanggalLahir)->age;
        }
        return $data;
    }

    private function formatDateAndTime($data)
    {
        foreach ($data as $key => $value) {
            // count dif days
            $value->diffDays = Carbon::parse($value->akhir_tanggal)->diffInDays(Carbon::parse($value->mulai_tanggal));

            // tb_jadwal
            $value->mulai_waktu = Carbon::parse($value->mulai_waktu)->format('H:i');
            $value->akhir_waktu = Carbon::parse($value->akhir_waktu)->format('H:i');

            $value->tgl_mulai = $value->mulai_tanggal;
            $value->mulai_tanggal = Carbon::parse($value->mulai_tanggal)->translatedFormat('d M');
            $value->tgl_akhir = $value->akhir_tanggal;
            $value->akhir_tanggal = Carbon::parse($value->akhir_tanggal)->translatedFormat('d M');

            // tb_umkm
            $value->buka_waktu = Carbon::parse($value->buka_waktu)->format('H:i');
            $value->tutup_waktu = Carbon::parse($value->tutup_waktu)->format('H:i');
        }

        return $data; // Mengembalikan data yang telah diformat
    }
}
