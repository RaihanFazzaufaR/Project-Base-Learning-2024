<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['judul'=>'Senam Pagi','aktivitas_tipe'=>'Kesehatan', 'mulai_tanggal'=>'2024-01-09', 'akhir_tanggal'=>'2024-03-25', 'mulai_waktu'=>'01:03:53', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 Januari 2024, Waktu:07.00 - selesai, Tempat: Balai RW 3 Bumiayu', 'pembuat_id'=>1, 'status'=>'diproses'],
            ['judul'=>'Pelatihan Keterampilan Warga','aktivitas_tipe'=>'Pendidikan', 'mulai_tanggal'=>'2024-01-13', 'akhir_tanggal'=>'2024-04-17', 'mulai_waktu'=>'02:06:14', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 Februari 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>3, 'status'=>'diproses'],
            ['judul'=>'Diskusi Buku','aktivitas_tipe'=>'Budaya', 'mulai_tanggal'=>'2024-02-16', 'akhir_tanggal'=>'2024-03-02', 'mulai_waktu'=>'03:09:53', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 Maret 2024, Waktu:07.00 - selesai, Tempat: Masjid RW 3 Bumiayu', 'pembuat_id'=>1, 'status'=>'selesai'],
            ['judul'=>'Lomba Masak','aktivitas_tipe'=>'Kuliner', 'mulai_tanggal'=>'2024-02-24', 'akhir_tanggal'=>'2024-04-13', 'mulai_waktu'=>'04:12:53', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 April 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>3, 'status'=>'selesai'],
            ['judul'=>'Penggalangan Dana Kemanusiaan','aktivitas_tipe'=>'Kemanusiaan', 'mulai_tanggal'=>'2024-03-28', 'akhir_tanggal'=>'2024-05-14', 'mulai_waktu'=>'05:15:35', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 Mei 2024, Waktu:07.00 - selesai, Tempat: Balai RW 3 Bumiayu', 'pembuat_id'=>1, 'status'=>'ditolak'],
            ['judul'=>'Pertukaran Barang Bekas','aktivitas_tipe'=>'Lingkungan', 'mulai_tanggal'=>'2024-04-23', 'akhir_tanggal'=>'2024-08-12', 'mulai_waktu'=>'06:18:57', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 Juni 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>3, 'status'=>'diproses'],
            ['judul'=>'Peringatan Hari Kemerdekaan','aktivitas_tipe'=>'Kebangsaan', 'mulai_tanggal'=>'2024-04-13', 'akhir_tanggal'=>'2024-09-14', 'mulai_waktu'=>'07:21:51', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 Juli 2024, Waktu:07.00 - selesai, Tempat: Balai RW 3 Bumiayu', 'pembuat_id'=>1, 'status'=>'ditolak'],
            ['judul'=>'Pekan Seni dan Budaya','aktivitas_tipe'=>'Budaya', 'mulai_tanggal'=>'2024-05-11', 'akhir_tanggal'=>'2024-12-24', 'mulai_waktu'=>'08:24:45', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 Agustus 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>3, 'status'=>'diproses'],
            ['judul'=>'Kelas Bahasa Inggris','aktivitas_tipe'=>'Bahasa', 'mulai_tanggal'=>'2024-06-19', 'akhir_tanggal'=>'2024-10-27', 'mulai_waktu'=>'09:27:41', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 September 2024, Waktu:07.00 - selesai, Tempat: Masjid RW 3 Bumiayu', 'pembuat_id'=>1, 'status'=>'diproses'],
            ['judul'=>'Pelayanan Kesehatan Gratis','aktivitas_tipe'=>'Kesehatan', 'mulai_tanggal'=>'2024-07-10', 'akhir_tanggal'=>'2024-09-14', 'mulai_waktu'=>'10:30:12', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 Oktober 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>3, 'status'=>'selesai'],
            ['judul'=>'Pertemuan Keagamaan','aktivitas_tipe'=>'Keagamaan', 'mulai_tanggal'=>'2024-08-12', 'akhir_tanggal'=>'2024-10-15', 'mulai_waktu'=>'11:33:21', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 November 2024, Waktu:07.00 - selesai, Tempat: Balai RW 3 Bumiayu', 'pembuat_id'=>2, 'status'=>'diproses'],
            ['judul'=>'Kelompok Diskusi Orang Tua dan Anak','aktivitas_tipe'=>'Pendidikan', 'mulai_tanggal'=>'2024-08-05', 'akhir_tanggal'=>'2024-12-23', 'mulai_waktu'=>'12:36:32', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 Desember 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>4, 'status'=>'selesai'],
            ['judul'=>'Program Tanaman Hijau','aktivitas_tipe'=>'Lingkungan', 'mulai_tanggal'=>'2024-09-09', 'akhir_tanggal'=>'2024-11-21', 'mulai_waktu'=>'13:39:41', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 Januari 2024, Waktu:07.00 - selesai, Tempat: Masjid RW 3 Bumiayu', 'pembuat_id'=>4, 'status'=>'diproses'],
            ['judul'=>'Kebersihan Lingkungan','aktivitas_tipe'=>'lingkungan', 'mulai_tanggal'=>'2024-10-05', 'akhir_tanggal'=>'2024-11-12', 'mulai_waktu'=>'14:42:54', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 Februari 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>6, 'status'=>'ditolak'],
            ['judul'=>'Kelompok Kesenian Tradisional','aktivitas_tipe'=>'Budaya', 'mulai_tanggal'=>'2024-11-07', 'akhir_tanggal'=>'2024-12-02', 'mulai_waktu'=>'15:45:15', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 Maret 2024, Waktu:07.00 - selesai, Tempat: Balai RW 3 Bumiayu', 'pembuat_id'=>8, 'status'=>'diproses'],
            ['judul'=>'Pelatihan Usaha Kecil Menengah','aktivitas_tipe'=>'Ekonomi', 'mulai_tanggal'=>'2024-12-03', 'akhir_tanggal'=>'2024-12-31', 'mulai_waktu'=>'16:48:58', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 April 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>10, 'status'=>'diproses'],
            ['judul'=>'Pameran Karya Seni Warga','aktivitas_tipe'=>'Budaya', 'mulai_tanggal'=>'2024-12-14', 'akhir_tanggal'=>'2024-12-28', 'mulai_waktu'=>'17:51:57', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 Mei 2024, Waktu:07.00 - selesai, Tempat: Masjid RW 3 Bumiayu', 'pembuat_id'=>12, 'status'=>'ditolak'],
            ['judul'=>'Gotong Royong Bersih','aktivitas_tipe'=>'Lingkungan', 'mulai_tanggal'=>'2024-10-15', 'akhir_tanggal'=>'2024-12-20', 'mulai_waktu'=>'18:53:38', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 Juni 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>14, 'status'=>'diproses'],
            ['judul'=>'Kelas Kreativitas Anak','aktivitas_tipe'=>'Pendidikan', 'mulai_tanggal'=>'2024-09-19', 'akhir_tanggal'=>'2024-11-02', 'mulai_waktu'=>'19:56:35', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Sabtu, 22 Juli 2024, Waktu:07.00 - selesai, Tempat: Balai RW 3 Bumiayu', 'pembuat_id'=>16, 'status'=>'selesai'],
            ['judul'=>'Kompetisi Olahraga','aktivitas_tipe'=>'Kesehatan', 'mulai_tanggal'=>'2024-08-10', 'akhir_tanggal'=>'2024-12-13', 'mulai_waktu'=>'20:59:31', 'akhir_waktu'=>'00:00:00', 'konten'=>'Dilaksanakan pada: Hari/Tanggal:Minggu, 22 Agustus 2024, Waktu:07.00 - selesai, Tempat: Lapangan RW 3 Bumiayu', 'pembuat_id'=>18, 'status'=>'diproses'],
        ];
        DB::table('tb_jadwal')->insert($data);
    }
}
