<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AjuanBansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample data
        $data = [
            [
                'id_kartuKeluarga' => 1,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => '3',
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'status' => 'diproses',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_kartuKeluarga' => 2,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => '5',
                'penghasilan_keluarga' => '<1.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'status' => 'diterima',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan lebih banyak data sampel sesuai kebutuhan
        ];

        // Insert data into the table
        DB::table('tb_ajuan_bansos')->insert($data);
        ;
    }
}