<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmkmKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['umkm_id' => 1, 'kategori_id' => 1],
            ['umkm_id' => 2, 'kategori_id' => 6],
            ['umkm_id' => 3, 'kategori_id' => 1],
            ['umkm_id' => 3, 'kategori_id' => 2],
            ['umkm_id' => 4, 'kategori_id' => 6],
            ['umkm_id' => 5, 'kategori_id' => 4],
            ['umkm_id' => 6, 'kategori_id' => 6],
            ['umkm_id' => 7, 'kategori_id' => 2],
            ['umkm_id' => 8, 'kategori_id' => 6],
            ['umkm_id' => 9, 'kategori_id' => 6],
            ['umkm_id' => 10, 'kategori_id' => 3],
            ['umkm_id' => 10, 'kategori_id' => 4],
            ['umkm_id' => 11, 'kategori_id' => 6],
            ['umkm_id' => 12, 'kategori_id' => 1],
            ['umkm_id' => 13, 'kategori_id' => 4],
            ['umkm_id' => 13, 'kategori_id' => 6],
            ['umkm_id' => 14, 'kategori_id' => 5],
            ['umkm_id' => 15, 'kategori_id' => 1],
            ['umkm_id' => 15, 'kategori_id' => 4],
            ['umkm_id' => 15, 'kategori_id' => 6],
        ];
        DB::table('tb_umkm_kategori')->insert($data);
    }
}