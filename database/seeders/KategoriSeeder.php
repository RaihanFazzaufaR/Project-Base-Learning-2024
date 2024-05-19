<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            ['nama_kategori' => 'Makanan'],
            ['nama_kategori' => 'Minuman'],
            ['nama_kategori' => 'Peralatan Rumah Tangga'],
            ['nama_kategori' => 'Kebutuhan Pokok'],
            ['nama_kategori' => 'Jasa'],
            ['nama_kategori' => 'Lainnya'],
        ];

        DB::table('tb_kategori')->insert($kategori);
    }
}