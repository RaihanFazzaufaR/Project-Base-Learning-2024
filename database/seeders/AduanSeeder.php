<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['pengadu_id'=> 2, 'judul'=>'Pohon tumbang', 'image'=>'testaduan.jpeg',  'prioritas'=>'penting', 'status'=>'selesai', 'konten_aduan'=>'Pohon di depan rumah saya tumbang, tempat saya berada di JL. Cokrokusumo no 13', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 4, 'judul'=>'Jalanan Rusak' ,'image'=>null,  'prioritas'=>'darurat', 'status'=>'diproses', 'konten_aduan'=>'Jalan di gang 1 jalan imam bonjol rusak, dimohon untuk segera diperbaiki', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 5, 'judul'=>'Lampu Jalan Mati', 'image'=>null,  'prioritas'=>'biasa', 'status'=>'diproses', 'konten_aduan'=>'Lampu di jalan Soetomo mati, dimohon untuk segera dibenahi', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 7, 'judul'=> 'Permintaan Pelebaran TPA','image'=>null,  'prioritas'=>'penting', 'status'=>'diproses', 'konten_aduan'=>'Tempat pembuangan sampah selalu penuh, dimohon untuk memperluas tempat pembuangan sampah', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 8, 'judul'=>'Pohon Tumbang', 'image'=>null,  'prioritas'=>'darurat', 'status'=>'diproses', 'konten_aduan'=>'Pohon di depan rumah saya tumbang, tempat saya berada di JL. Cokrokusumo no 13', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 2, 'judul'=>'Pohon tumbang', 'image'=>'testaduan.jpeg',  'prioritas'=>'penting', 'status'=>'selesai', 'konten_aduan'=>'Pohon di depan rumah saya tumbang, tempat saya berada di JL. Cokrokusumo no 13', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 4, 'judul'=>'Jalanan Rusak' ,'image'=>null,  'prioritas'=>'darurat', 'status'=>'diproses', 'konten_aduan'=>'Jalan di gang 1 jalan imam bonjol rusak, dimohon untuk segera diperbaiki', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 5, 'judul'=>'Lampu Jalan Mati', 'image'=>null,  'prioritas'=>'biasa', 'status'=>'diproses', 'konten_aduan'=>'Lampu di jalan Soetomo mati, dimohon untuk segera dibenahi', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 7, 'judul'=> 'Permintaan Pelebaran TPA','image'=>null,  'prioritas'=>'penting', 'status'=>'diproses', 'konten_aduan'=>'Tempat pembuangan sampah selalu penuh, dimohon untuk memperluas tempat pembuangan sampah', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 8, 'judul'=>'Pohon Tumbang', 'image'=>null,  'prioritas'=>'darurat', 'status'=>'diproses', 'konten_aduan'=>'Pohon di depan rumah saya tumbang, tempat saya berada di JL. Cokrokusumo no 13', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 2, 'judul'=>'Pohon tumbang', 'image'=>'testaduan.jpeg',  'prioritas'=>'penting', 'status'=>'selesai', 'konten_aduan'=>'Pohon di depan rumah saya tumbang, tempat saya berada di JL. Cokrokusumo no 13', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 4, 'judul'=>'Jalanan Rusak' ,'image'=>null,  'prioritas'=>'darurat', 'status'=>'diproses', 'konten_aduan'=>'Jalan di gang 1 jalan imam bonjol rusak, dimohon untuk segera diperbaiki', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 5, 'judul'=>'Lampu Jalan Mati', 'image'=>null,  'prioritas'=>'biasa', 'status'=>'diproses', 'konten_aduan'=>'Lampu di jalan Soetomo mati, dimohon untuk segera dibenahi', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 7, 'judul'=> 'Permintaan Pelebaran TPA','image'=>null,  'prioritas'=>'penting', 'status'=>'diproses', 'konten_aduan'=>'Tempat pembuangan sampah selalu penuh, dimohon untuk memperluas tempat pembuangan sampah', 'dibuat_tanggal'=>'2024-04-05'],
            ['pengadu_id'=> 8, 'judul'=>'Pohon Tumbang', 'image'=>null,  'prioritas'=>'darurat', 'status'=>'diproses', 'konten_aduan'=>'Pohon di depan rumah saya tumbang, tempat saya berada di JL. Cokrokusumo no 13', 'dibuat_tanggal'=>'2024-04-05']
        ];
        DB::table('tb_aduan')->insert($data);
    }
}
