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
            ['peminta_id'=>1, 'minta_tanggal'=>'2024-01-03', 'status'=>'diproses', 'tujuan_id'=>1, 'keperluan'=>'', 'template_id'=>1],
            ['peminta_id'=>1, 'minta_tanggal'=>'2024-02-06', 'status'=>'selesai', 'tujuan_id'=>2, 'keperluan'=>'', 'template_id'=>2],
            ['peminta_id'=>3, 'minta_tanggal'=>'2024-03-09', 'status'=>'ditolak', 'tujuan_id'=>3, 'keperluan'=>'', 'template_id'=>3],
            ['peminta_id'=>3, 'minta_tanggal'=>'2024-04-10', 'status'=>'menunggu', 'tujuan_id'=>4, 'keperluan'=>'', 'template_id'=>1],
            ['peminta_id'=>4, 'minta_tanggal'=>'2024-05-12', 'status'=>'diproses', 'tujuan_id'=>5, 'keperluan'=>'', 'template_id'=>1],
            ['peminta_id'=>4, 'minta_tanggal'=>'2024-06-14', 'status'=>'diproses', 'tujuan_id'=>6, 'keperluan'=>'', 'template_id'=>2],
            ['peminta_id'=>5, 'minta_tanggal'=>'2024-07-16', 'status'=>'diproses', 'tujuan_id'=>7, 'keperluan'=>'', 'template_id'=>1],
            ['peminta_id'=>2, 'minta_tanggal'=>'2024-08-18', 'status'=>'ditolak', 'tujuan_id'=>8, 'keperluan'=>'', 'template_id'=>3],
            ['peminta_id'=>6, 'minta_tanggal'=>'2024-09-20', 'status'=>'ditolak', 'tujuan_id'=>9, 'keperluan'=>'', 'template_id'=>3],
            ['peminta_id'=>6, 'minta_tanggal'=>'2024-10-21', 'status'=>'ditolak', 'tujuan_id'=>10, 'keperluan'=>'', 'template_id'=>1],
            ['peminta_id'=>8, 'minta_tanggal'=>'2024-11-23', 'status'=>'ditolak', 'tujuan_id'=>11, 'keperluan'=>'', 'template_id'=>2],
            ['peminta_id'=>9, 'minta_tanggal'=>'2024-12-25', 'status'=>'menunggu', 'tujuan_id'=>12, 'keperluan'=>'', 'template_id'=>2],
            ['peminta_id'=>11, 'minta_tanggal'=>'2024-01-27', 'status'=>'menunggu', 'tujuan_id'=>13, 'keperluan'=>'', 'template_id'=>2],
            ['peminta_id'=>13, 'minta_tanggal'=>'2024-02-30', 'status'=>'selesai', 'tujuan_id'=>14, 'keperluan'=>'', 'template_id'=>1],
            ['peminta_id'=>15, 'minta_tanggal'=>'2024-03-31', 'status'=>'menunggu', 'tujuan_id'=>15, 'keperluan'=>'', 'template_id'=>3],
            ['peminta_id'=>17, 'minta_tanggal'=>'2024-04-20', 'status'=>'menunggu', 'tujuan_id'=>16, 'keperluan'=>'', 'template_id'=>1],
            ['peminta_id'=>12, 'minta_tanggal'=>'2024-05-21', 'status'=>'diproses', 'tujuan_id'=>17, 'keperluan'=>'', 'template_id'=>3],
            ['peminta_id'=>14, 'minta_tanggal'=>'2024-06-23', 'status'=>'selesai', 'tujuan_id'=>18, 'keperluan'=>'', 'template_id'=>3],
            ['peminta_id'=>16, 'minta_tanggal'=>'2024-07-21', 'status'=>'ditolak', 'tujuan_id'=>19, 'keperluan'=>'', 'template_id'=>1],
            ['peminta_id'=>20, 'minta_tanggal'=>'2024-08-04', 'status'=>'menunggu', 'tujuan_id'=>20, 'keperluan'=>'', 'template_id'=>2],
            ['peminta_id'=>20, 'minta_tanggal'=>'2024-09-02', 'status'=>'diproses', 'tujuan_id'=>21, 'keperluan'=>'', 'template_id'=>2],
            ['peminta_id'=>21, 'minta_tanggal'=>'2024-10-01', 'status'=>'selesai', 'tujuan_id'=>22, 'keperluan'=>'', 'template_id'=>1],
        ];
        DB::table('tb_permintaansurat')->insert($data);
    }
}
