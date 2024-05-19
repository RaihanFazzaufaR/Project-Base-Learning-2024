<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['aduan_id'=> 1, 'perespon_id'=> 1, 'konten_respon'=>'Pohon sudah diangkat', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 2, 'perespon_id'=> 1, 'konten_respon'=>'Jalan sudah diperbaiki', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 3, 'perespon_id'=> 1, 'konten_respon'=>'Baik akan segera kami kerjakan', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 3, 'perespon_id'=> 1, 'konten_respon'=>'Lampu sudah diganti', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 4, 'perespon_id'=> 1, 'konten_respon'=>'Baik akan segera kami kerjakan', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05']
        ];
    }
}
