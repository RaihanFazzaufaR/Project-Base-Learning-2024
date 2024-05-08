<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class templateSuratSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['jenisSurat'=>'Surat Pengantar', 'template_path'=>'D:\Aplikasi\laragon\www\project-base-learning-2024\contoh-surat.jpeg'],
            ['jenisSurat'=>'Surat Tidak Mampu', 'template_path'=>'D:\Aplikasi\laragon\www\project-base-learning-2024\contoh-surat.jpeg'],
            ['jenisSurat'=>'Surat Usaha', 'template_path'=>'D:\Aplikasi\laragon\www\project-base-learning-2024\contoh-surat.jpeg'],
        ];
        DB::table('tb_template')->insert($data);
    }
}
