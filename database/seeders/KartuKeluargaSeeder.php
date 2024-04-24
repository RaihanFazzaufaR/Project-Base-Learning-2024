<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KartuKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['niKeluarga'=>"3304111001000001", 'jmlAnggota'=>2],
            ['niKeluarga'=>"3304111001000002", 'jmlAnggota'=>2],
            ['niKeluarga'=>"3304111001000003", 'jmlAnggota'=>1],
        ];
        DB::table('tb_kartukeluarga')->insert($data);
    }
}
