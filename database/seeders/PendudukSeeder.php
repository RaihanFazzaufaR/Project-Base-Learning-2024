<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nik'=>"3570000000000001", 'nama'=>"Raihan Fazzaufa Rasendriya", 'tempatLahir'=>"Jombang", 'tanggalLahir'=>'2004-03-03', 'jenisKelamin'=>'L', 'alamat'=>"JL. LESTI UTARA NO. 88C", 'noRt'=>'008', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'NIKeluarga'=>'3304111001000001', 'statusDiRw'=>'penduduk', 'gaji'=>2000000],
            ['nik'=>"3570000000000002", 'nama'=>"Maulidin Zakaria", 'tempatLahir'=>"Jombang", 'tanggalLahir'=>'2004-04-05', 'jenisKelamin'=>'L', 'alamat'=>"JL. IMAM BONJOL NO. 156", 'noRt'=>'008', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'NIKeluarga'=>'3304111001000002', 'statusDiRw'=>'penduduk', 'gaji'=>2300000],
            ['nik'=>"3570000000000003", 'nama'=>"Lucky Kurniawan", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2003-12-03', 'jenisKelamin'=>'L', 'alamat'=>"JL. SUDIRMAN NO. 7", 'noRt'=>'008', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'NIKeluarga'=>'3304111001000003', 'statusDiRw'=>'penduduk', 'gaji'=>2500000]
        ];
        DB::table('tb_penduduk')->insert($data);
    }
}
