<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BansosSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['penerima_id'=>2, 'penerimaan_tanggal'=>'2024-01-10', 'diterima_tanggal'=>'2024-03-25', 'penyelenggara'=>'Kementerian Sosial', 'pengambil_id'=>4],
            ['penerima_id'=>2, 'penerimaan_tanggal'=>'2024-06-15', 'diterima_tanggal'=>'2024-10-17', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>3],
            ['penerima_id'=>3, 'penerimaan_tanggal'=>'2024-02-09', 'diterima_tanggal'=>'2024-05-02', 'penyelenggara'=>'Kementerian Agama', 'pengambil_id'=>2],
            ['penerima_id'=>3, 'penerimaan_tanggal'=>'2024-10-01', 'diterima_tanggal'=>'2024-12-13', 'penyelenggara'=>'Pemprov Jatim', 'pengambil_id'=>1],
            ['penerima_id'=>4, 'penerimaan_tanggal'=>'2024-03-04', 'diterima_tanggal'=>'2024-08-11', 'penyelenggara'=>'Kementerian Sosial', 'pengambil_id'=>9],
            ['penerima_id'=>5, 'penerimaan_tanggal'=>'2023-12-03', 'diterima_tanggal'=>'2024-09-14', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>6],
            ['penerima_id'=>6, 'penerimaan_tanggal'=>'2023-11-09', 'diterima_tanggal'=>'2024-04-13', 'penyelenggara'=>'Kementerian Sosial', 'pengambil_id'=>5],
            ['penerima_id'=>7, 'penerimaan_tanggal'=>'2023-10-07', 'diterima_tanggal'=>'2024-05-17', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>3],
            ['penerima_id'=>7, 'penerimaan_tanggal'=>'2023-09-06', 'diterima_tanggal'=>'2024-03-19', 'penyelenggara'=>'Pemprov Jatim', 'pengambil_id'=>2],
            ['penerima_id'=>7, 'penerimaan_tanggal'=>'2023-06-07', 'diterima_tanggal'=>'2024-02-21', 'penyelenggara'=>'Kementerian Sosial', 'pengambil_id'=>12],
            ['penerima_id'=>11, 'penerimaan_tanggal'=>'2023-06-15', 'diterima_tanggal'=>'2024-01-25', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>21],
            ['penerima_id'=>9, 'penerimaan_tanggal'=>'2024-04-12', 'diterima_tanggal'=>'2024-12-27', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>20],
            ['penerima_id'=>12, 'penerimaan_tanggal'=>'2024-03-18', 'diterima_tanggal'=>'2024-10-28', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>12],
            ['penerima_id'=>11, 'penerimaan_tanggal'=>'2024-02-19', 'diterima_tanggal'=>'2024-11-24', 'penyelenggara'=>'Kementerian Sosial', 'pengambil_id'=>14],
            ['penerima_id'=>13, 'penerimaan_tanggal'=>'2024-06-13', 'diterima_tanggal'=>'2024-07-26', 'penyelenggara'=>'Pemprov Jatim', 'pengambil_id'=>11],
            ['penerima_id'=>14, 'penerimaan_tanggal'=>'2024-07-12', 'diterima_tanggal'=>'2024-08-16', 'penyelenggara'=>'Kementerian Agama', 'pengambil_id'=>17],
            ['penerima_id'=>10, 'penerimaan_tanggal'=>'2024-04-20', 'diterima_tanggal'=>'2024-08-15', 'penyelenggara'=>'Kementerian Agama', 'pengambil_id'=>18],
            ['penerima_id'=>14, 'penerimaan_tanggal'=>'2023-10-21', 'diterima_tanggal'=>'2024-09-12', 'penyelenggara'=>'Kementerian Agama', 'pengambil_id'=>13],
            ['penerima_id'=>10, 'penerimaan_tanggal'=>'2023-10-24', 'diterima_tanggal'=>'2024-02-17', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>13],
            ['penerima_id'=>14, 'penerimaan_tanggal'=>'2023-12-27', 'diterima_tanggal'=>'2024-04-18', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>12],
            ['penerima_id'=>15, 'penerimaan_tanggal'=>'2023-11-29', 'diterima_tanggal'=>'2024-05-13', 'penyelenggara'=>'Pemprov Jatim', 'pengambil_id'=>10],
            ['penerima_id'=>15, 'penerimaan_tanggal'=>'2024-09-30', 'diterima_tanggal'=>'2024-11-11', 'penyelenggara'=>'Kementerian Agama', 'pengambil_id'=>5],
            ['penerima_id'=>3, 'penerimaan_tanggal'=>'2024-01-31', 'diterima_tanggal'=>'2024-12-15', 'penyelenggara'=>'Pemprov Jatim', 'pengambil_id'=>19],
            ['penerima_id'=>6, 'penerimaan_tanggal'=>'2024-02-29', 'diterima_tanggal'=>'2024-12-17', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>17],
            ['penerima_id'=>11, 'penerimaan_tanggal'=>'2024-04-22', 'diterima_tanggal'=>'2024-07-12', 'penyelenggara'=>'Pemprov Jatim', 'pengambil_id'=>15],
            ['penerima_id'=>11, 'penerimaan_tanggal'=>'2023-12-21', 'diterima_tanggal'=>'2024-04-15', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>12],
            ['penerima_id'=>15, 'penerimaan_tanggal'=>'2024-07-24', 'diterima_tanggal'=>'2024-10-13', 'penyelenggara'=>'Pemprov Jatim', 'pengambil_id'=>18],
            ['penerima_id'=>7, 'penerimaan_tanggal'=>'2024-06-01', 'diterima_tanggal'=>'2024-01-12', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>18],
            ['penerima_id'=>14, 'penerimaan_tanggal'=>'2024-08-09', 'diterima_tanggal'=>'2024-12-17', 'penyelenggara'=>'Pemprov Jatim', 'pengambil_id'=>3],
            ['penerima_id'=>15, 'penerimaan_tanggal'=>'2023-12-07', 'diterima_tanggal'=>'2024-02-12', 'penyelenggara'=>'Pemkot Malang', 'pengambil_id'=>21],
        ];
        DB::table('tb_bansos')->insert($data);
    }
}
