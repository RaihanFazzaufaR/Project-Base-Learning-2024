<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersuratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'surat_id' => 1,
                'peminta_id' => 1,
                'minta_tanggal' => '2024-06-11',
                'status' => 'Selesai',
                'keperluan' => 'Syarat Buka Usaha',
                'template_id' => '1',
                'tempatLahir' => 'Jakarta',
                'tanggalLahir' => '2001-01-01',
                'jenisKelamin' => 'L',
                'statusNikah' => 'belum',
                'nik' => '0000000000000001',
                'nikKeluarga' => '0000000000000001',
                'warganegara' => 'WNA',
                'agama' => 'islam',
                'pekerjaan' => 'mahasiswa',
                'alamat' => 'RW3',
            ],
            [
                'surat_id' => 2,
                'peminta_id' => 2,
                'minta_tanggal' => '2024-06-11',
                'status' => 'Selesai',
                'keperluan' => 'Syarat Izin Kerja',
                'template_id' => '1',
                'tempatLahir' => 'Jombang',
                'tanggalLahir' => '2004-03-03',
                'jenisKelamin' => 'L',
                'statusNikah' => 'belum',
                'nik' => '0000000000000011',
                'nikKeluarga' => '3304111001000001',
                'warganegara' => 'WNI',
                'agama' => 'islam',
                'pekerjaan' => 'mahasiswa',
                'alamat' => 'Jl. Soekarno-Hatta No. 123, Kel. Bumiayu, Kec. Kedungkandang, Malang, 65141',
            ],
            [
                'surat_id' => 3,
                'peminta_id' => 3,
                'minta_tanggal' => '2024-06-11',
                'status' => 'Selesai',
                'keperluan' => 'Syarat Nikah',
                'template_id' => '1',
                'tempatLahir' => 'Jombang',
                'tanggalLahir' => '2001-03-03',
                'jenisKelamin' => 'L',
                'statusNikah' => 'belum',
                'nik' => '0000000000000012',
                'nikKeluarga' => '3304111001000001',
                'warganegara' => 'WNI',
                'agama' => 'islam',
                'pekerjaan' => 'mahasiswa',
                'alamat' => 'Jl. Soekarno-Hatta No. 123, Kel. Bumiayu, Kec. Kedungkandang, Malang, 65141',
            ],
            [
                'surat_id' => 4,
                'peminta_id' => 4,
                'minta_tanggal' => '2024-06-11',
                'status' => 'Selesai',
                'keperluan' => 'Surat Keterangan Kematian',
                'template_id' => '3',
                'tempatLahir' => 'Jombang',
                'tanggalLahir' => '2004-04-05',
                'jenisKelamin' => 'L',
                'statusNikah' => 'belum',
                'nik' => '3570000000000021',
                'nikKeluarga' => '3304111001000002',
                'warganegara' => 'WNI',
                'agama' => 'islam',
                'pekerjaan' => 'mahasiswa',
                'alamat' => 'Jl. Ijen No. 456, Kel. Klojen, Kec. Klojen, Malang, 65112',
                'nama_pelapor' => 'Budi',
                'hubungan_pelapor' => 'Saudara',
                'penyebab_kematian' => 'Sakit Jantung',
                'tempat_meninggal' => 'Rumah Sakit',
                'tanggal_wafat' => '2024-10-05',
            ],
            [
                'surat_id' => 5,
                'peminta_id' => 5,
                'minta_tanggal' => '2024-06-11',
                'status' => 'Selesai',
                'keperluan' => 'Surat Keterangan Kematian',
                'template_id' => '3',
                'tempatLahir' => 'Jombang',
                'tanggalLahir' => '1998-04-05',
                'jenisKelamin' => 'L',
                'statusNikah' => 'belum',
                'nik' => '3570000000000022',
                'nikKeluarga' => '3304111001000002',
                'warganegara' => 'WNI',
                'agama' => 'islam',
                'pekerjaan' => 'mahasiswa',
                'alamat' => 'Jl. Ijen No. 456, Kel. Klojen, Kec. Klojen, Malang, 65112',
                'nama_pelapor' => 'Yanto',
                'hubungan_pelapor' => 'Bapak',
                'penyebab_kematian' => 'Kecelakaan',
                'tempat_meninggal' => 'Jalan Raya',
                'tanggal_wafat' => '2024-08-10',
            ],
            [
                'surat_id' => 6,
                'peminta_id' => 6,
                'minta_tanggal' => '2024-06-11',
                'status' => 'Selesai',
                'keperluan' => 'Surat Keterangan Pindah',
                'template_id' => '3',
                'tempatLahir' => 'Jombang',
                'tanggalLahir' => '2020-04-05',
                'jenisKelamin' => 'L',
                'statusNikah' => 'belum',
                'nik' => '3570000000000023',
                'nikKeluarga' => '3304111001000002',
                'warganegara' => 'WNI',
                'agama' => 'islam',
                'pekerjaan' => 'mahasiswa',
                'alamat' => 'Jl. Ijen No. 456, Kel. Klojen, Kec. Klojen, Malang, 65112',
                'alamat_pindah' =>  'Jl. Raya Batu No. 321, Kel. Sumberadi, Kec. Batu, Malang, 65312',
                'alasan_pindah' => 'Punya Rumah Baru',
                'jumlah_keluarga_pindah' => '5',
            ]
        ];
        DB::table('tb_surat')->insert($data);
    }
}
