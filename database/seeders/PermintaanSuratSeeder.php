<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermintaanSuratSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['peminta_id'=>1, 'minta_tanggal'=>'2024-01-03 07:12:05', 'status'=>'diproses', 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
            ['peminta_id'=>1, 'minta_tanggal'=>'2024-02-06 07:23:10', 'status'=>'selesai', 'keperluan'=>'Mengurus untuk keperluan berkas KIP', 'template_id'=>2],
            ['peminta_id'=>3, 'minta_tanggal'=>'2024-03-09 08:34:15', 'status'=>'ditolak', 'keperluan'=>'Mengurus untuk legalitas usaha', 'template_id'=>3],
            ['peminta_id'=>3, 'minta_tanggal'=>'2024-04-10 09:54:20', 'status'=>'menunggu', 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
            ['peminta_id'=>4, 'minta_tanggal'=>'2024-05-12 10:34:25', 'status'=>'diproses', 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
            ['peminta_id'=>4, 'minta_tanggal'=>'2024-06-14 11:32:35', 'status'=>'diproses', 'keperluan'=>'Mengurus untuk keperluan berkas Bansos', 'template_id'=>2],
            ['peminta_id'=>5, 'minta_tanggal'=>'2024-07-16 18:12:45', 'status'=>'diproses', 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
            ['peminta_id'=>2, 'minta_tanggal'=>'2024-08-18 13:32:55', 'status'=>'ditolak', 'keperluan'=>'Mengurus untuk legalitas usaha', 'template_id'=>3],
            ['peminta_id'=>6, 'minta_tanggal'=>'2024-09-20 10:34:00', 'status'=>'ditolak', 'keperluan'=>'Mengurus untuk mendapatkan dana bantuan usaha', 'template_id'=>3],
            ['peminta_id'=>6, 'minta_tanggal'=>'2024-10-21 14:23:20', 'status'=>'ditolak', 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
            ['peminta_id'=>8, 'minta_tanggal'=>'2024-11-23 15:15:30', 'status'=>'ditolak', 'keperluan'=>'Mengurus untuk keperluan berkas KIP', 'template_id'=>2],
            ['peminta_id'=>9, 'minta_tanggal'=>'2024-12-25 16:27:40', 'status'=>'menunggu', 'keperluan'=>'Mengurus untuk keperluan berkas Bansos', 'template_id'=>2],
            ['peminta_id'=>11, 'minta_tanggal'=>'2025-01-27 17:28:50', 'status'=>'menunggu', 'keperluan'=>'Mengurus untuk keperluan berkas KIP', 'template_id'=>2],
            ['peminta_id'=>13, 'minta_tanggal'=>'2025-02-28 11:39:05', 'status'=>'selesai', 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
            ['peminta_id'=>15, 'minta_tanggal'=>'2025-03-31 12:49:10', 'status'=>'menunggu', 'keperluan'=>'Mengurus untuk mendapatkan dana bantuan usaha', 'template_id'=>3],
            ['peminta_id'=>17, 'minta_tanggal'=>'2025-04-20 14:56:15', 'status'=>'menunggu', 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
            ['peminta_id'=>12, 'minta_tanggal'=>'2025-05-21 16:53:25', 'status'=>'diproses', 'keperluan'=>'Mengurus untuk mendapatkan dana bantuan usaha', 'template_id'=>3],
            ['peminta_id'=>14, 'minta_tanggal'=>'2025-06-23 01:57:35', 'status'=>'selesai', 'keperluan'=>'Mengurus untuk mendapatkan dana bantuan usaha', 'template_id'=>3],
            ['peminta_id'=>16, 'minta_tanggal'=>'2025-07-21 04:26:45', 'status'=>'ditolak', 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
            ['peminta_id'=>20, 'minta_tanggal'=>'2025-08-04 06:27:35', 'status'=>'menunggu', 'keperluan'=>'Mengurus untuk keperluan berkas KIP', 'template_id'=>2],
            ['peminta_id'=>21, 'minta_tanggal'=>'2025-09-02 07:29:00', 'status'=>'diproses', 'keperluan'=>'Mengurus untuk keperluan berkas Bansos', 'template_id'=>2],        
        ];
        // $data = [
        //     ['peminta_id'=>1, 'minta_tanggal'=>'2024-01-03 07:12:05', 'status'=>'diproses', 'tujuan_id'=>1, 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
        //     ['peminta_id'=>1, 'minta_tanggal'=>'2024-02-06 07:23:10', 'status'=>'selesai', 'tujuan_id'=>2, 'keperluan'=>'Mengurus untuk keperluan berkas KIP', 'template_id'=>2],
        //     ['peminta_id'=>3, 'minta_tanggal'=>'2024-03-09 08:34:15', 'status'=>'ditolak', 'tujuan_id'=>3, 'keperluan'=>'Mengurus untuk legalitas usaha', 'template_id'=>3],
        //     ['peminta_id'=>3, 'minta_tanggal'=>'2024-04-10 09:54:20', 'status'=>'menunggu', 'tujuan_id'=>4, 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
        //     ['peminta_id'=>4, 'minta_tanggal'=>'2024-05-12 10:34:25', 'status'=>'diproses', 'tujuan_id'=>5, 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
        //     ['peminta_id'=>4, 'minta_tanggal'=>'2024-06-14 11:32:35', 'status'=>'diproses', 'tujuan_id'=>6, 'keperluan'=>'Mengurus untuk keperluan berkas Bansos', 'template_id'=>2],
        //     ['peminta_id'=>5, 'minta_tanggal'=>'2024-07-16 18:12:45', 'status'=>'diproses', 'tujuan_id'=>7, 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
        //     ['peminta_id'=>2, 'minta_tanggal'=>'2024-08-18 13:32:55', 'status'=>'ditolak', 'tujuan_id'=>8, 'keperluan'=>'Mengurus untuk legalitas usaha', 'template_id'=>3],
        //     ['peminta_id'=>6, 'minta_tanggal'=>'2024-09-20 10:34:00', 'status'=>'ditolak', 'tujuan_id'=>9, 'keperluan'=>'Mengurus untuk mendapatkan dana bantuan usaha', 'template_id'=>3],
        //     ['peminta_id'=>6, 'minta_tanggal'=>'2024-10-21 14:23:20', 'status'=>'ditolak', 'tujuan_id'=>10, 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
        //     ['peminta_id'=>8, 'minta_tanggal'=>'2024-11-23 15:15:30', 'status'=>'ditolak', 'tujuan_id'=>11, 'keperluan'=>'Mengurus untuk keperluan berkas KIP', 'template_id'=>2],
        //     ['peminta_id'=>9, 'minta_tanggal'=>'2024-12-25 16:27:40', 'status'=>'menunggu', 'tujuan_id'=>12, 'keperluan'=>'Mengurus untuk keperluan berkas Bansos', 'template_id'=>2],
        //     ['peminta_id'=>11, 'minta_tanggal'=>'2025-01-27 17:28:50', 'status'=>'menunggu', 'tujuan_id'=>13, 'keperluan'=>'Mengurus untuk keperluan berkas KIP', 'template_id'=>2],
        //     ['peminta_id'=>13, 'minta_tanggal'=>'2025-02-28 11:39:05', 'status'=>'selesai', 'tujuan_id'=>14, 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
        //     ['peminta_id'=>15, 'minta_tanggal'=>'2025-03-31 12:49:10', 'status'=>'menunggu', 'tujuan_id'=>15, 'keperluan'=>'Mengurus untuk mendapatkan dana bantuan usaha', 'template_id'=>3],
        //     ['peminta_id'=>17, 'minta_tanggal'=>'2025-04-20 14:56:15', 'status'=>'menunggu', 'tujuan_id'=>16, 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
        //     ['peminta_id'=>12, 'minta_tanggal'=>'2025-05-21 16:53:25', 'status'=>'diproses', 'tujuan_id'=>17, 'keperluan'=>'Mengurus untuk mendapatkan dana bantuan usaha', 'template_id'=>3],
        //     ['peminta_id'=>14, 'minta_tanggal'=>'2025-06-23 01:57:35', 'status'=>'selesai', 'tujuan_id'=>18, 'keperluan'=>'Mengurus untuk mendapatkan dana bantuan usaha', 'template_id'=>3],
        //     ['peminta_id'=>16, 'minta_tanggal'=>'2025-07-21 04:26:45', 'status'=>'ditolak', 'tujuan_id'=>19, 'keperluan'=>'Mengurus status kependudukan sebagai warga tetap', 'template_id'=>1],
        //     ['peminta_id'=>20, 'minta_tanggal'=>'2025-08-04 06:27:35', 'status'=>'menunggu', 'tujuan_id'=>20, 'keperluan'=>'Mengurus untuk keperluan berkas KIP', 'template_id'=>2],
        //     ['peminta_id'=>21, 'minta_tanggal'=>'2025-09-02 07:29:00', 'status'=>'diproses', 'tujuan_id'=>21, 'keperluan'=>'Mengurus untuk keperluan berkas Bansos', 'template_id'=>2],        
        // ];
        DB::table('tb_permintaansurat')->insert($data);
    }
}
