<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PindahPendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_foreign_penduduk' => 4,
                'id_foreign_surat' => 6,
                'id_foreign_kk' => 3,
            ],
            [
                'id_foreign_penduduk' => 5,
                'id_foreign_surat' => 6,
                'id_foreign_kk' => 3,
            ],
            [
                'id_foreign_penduduk' => 6,
                'id_foreign_surat' => 6,
                'id_foreign_kk' => 3,
            ],
            [
                'id_foreign_penduduk' => 106,
                'id_foreign_surat' => 6,
                'id_foreign_kk' => 3,
            ],
            [
                'id_foreign_penduduk' => 77,
                'id_foreign_surat' => 6,
                'id_foreign_kk' => 3,
            ]
        ];
        DB::table('tb_pindahpenduduk')->insert($data);
    }
}
