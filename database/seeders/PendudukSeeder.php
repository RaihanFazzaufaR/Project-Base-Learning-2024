<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {
        $data = [
            ['nik'=>"3570000000000011", 'nama'=>"Raihan Fazzaufa Rasendriya", 'tempatLahir'=>"Jombang", 'tanggalLahir'=>'2004-03-03', 'jenisKelamin'=>'L', 'noRt'=>'02', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>1, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Ketua RW', 'gaji'=>2000000],
            ['nik'=>"3570000000000012", 'nama'=>"Ahmad Wibowo", 'tempatLahir'=>"Jombang", 'tanggalLahir'=>'2004-03-03', 'jenisKelamin'=>'L', 'noRt'=>'02', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>1, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>1000000],
            ['nik'=>"3570000000000021", 'nama'=>"Maulidin Zakaria", 'tempatLahir'=>"Jombang", 'tanggalLahir'=>'2004-04-05', 'jenisKelamin'=>'L', , 'noRt'=>'03', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>2, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Ketua RT', 'gaji'=>2700000],
            ['nik'=>"3570000000000022", 'nama'=>"Muhammad Hidayat", 'tempatLahir'=>"Jombang", 'tanggalLahir'=>'2004-04-05', 'jenisKelamin'=>'L', , 'noRt'=>'03', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>2, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>1000000],
            ['nik'=>"3570000000000023", 'nama'=>"Rina Wati", 'tempatLahir'=>"Jombang", 'tanggalLahir'=>'2004-04-05', 'jenisKelamin'=>'L', , 'noRt'=>'03', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>2, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>1000000],
            ['nik'=>"3570000000000031", 'nama'=>"Lucky Kurniawan", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2003-12-03', 'jenisKelamin'=>'L', , 'noRt'=>'04', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>3, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>2500000],
            ['nik'=>"3570000000000031", 'nama'=>"Abdul Nugroho", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2003-12-03', 'jenisKelamin'=>'L', , 'noRt'=>'04', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>3, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>1000000],
            ['nik'=>"3570000000000041", 'nama'=>"Sony Febrianto", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2003-11-03', 'jenisKelamin'=>'L', , 'noRt'=>'01', 'agama'=>'islam', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>4, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>2400000],
            ['nik'=>"3570000000000051", 'nama'=>"Agus Santoso", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2001-10-13', 'jenisKelamin'=>'L', , 'noRt'=>'01', 'agama'=>'kristen', 'pekerjaan'=>'dosen', 'statusNikah'=>'sudah', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>5, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3500000],
            ['nik'=>"3570000000000052", 'nama'=>"Siti Sari", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2002-10-13', 'jenisKelamin'=>'P', , 'noRt'=>'01', 'agama'=>'kristen', 'pekerjaan'=>'guru', 'statusNikah'=>'sudah', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>5, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000061", 'nama'=>"Budi Kusuma", 'tempatLahir'=>"Bojonegoro", 'tanggalLahir'=>'2000-9-13', 'jenisKelamin'=>'L', , 'noRt'=>'04', 'agama'=>'kristen', 'pekerjaan'=>'PNS', 'statusNikah'=>'sudah', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>6, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000071", 'nama'=>"Andi Setiawan", 'tempatLahir'=>"Nganjuk", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'L', , 'noRt'=>'04', 'agama'=>'buddha', 'pekerjaan'=>'Pedagang', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>7, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000081", 'nama'=>"Putra Purnama", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'L', , 'noRt'=>'05', 'agama'=>'khonghucu', 'pekerjaan'=>'Pengusaha', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>8, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000091", 'nama'=>"Joko Yulianto", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'L', , 'noRt'=>'05', 'agama'=>'hindu', 'pekerjaan'=>'Pengusaha', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>9, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000101", 'nama'=>"Tono Subastio", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'L', , 'noRt'=>'05', 'agama'=>'hindu', 'pekerjaan'=>'Buruh', 'statusNikah'=>'sudah', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>10, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000102", 'nama'=>"Lina Sukarno", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'P', , 'noRt'=>'05', 'agama'=>'hindu', 'pekerjaan'=>'Buruh', 'statusNikah'=>'sudah', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>10, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000111", 'nama'=>"Firman Jaya", 'tempatLahir'=>"Malang", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'L', , 'noRt'=>'02', 'agama'=>'khonghucu', 'pekerjaan'=>'Tani', 'statusNikah'=>'belum', 'warganegara'=>'WNI', 'id_kartuKeluarga'=>11, 'statusPenduduk'=>'penduduk tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000121", 'nama'=>"Ruben Diaz", 'tempatLahir'=>"New York", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'L', , 'noRt'=>'02', 'agama'=>'katolik', 'pekerjaan'=>'Pengusaha', 'statusNikah'=>'sudah', 'warganegara'=>'WNA', 'id_kartuKeluarga'=>12, 'statusPenduduk'=>'penduduk tidak tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000131", 'nama'=>"Eko Wijaya", 'tempatLahir'=>"Mojokerto", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'L', , 'noRt'=>'03', 'agama'=>'katolik', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNA', 'id_kartuKeluarga'=>13, 'statusPenduduk'=>'penduduk tidak tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000141", 'nama'=>"Surya Pratama", 'tempatLahir'=>"Sidoarjo", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'L', , 'noRt'=>'03', 'agama'=>'katolik', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNA', 'id_kartuKeluarga'=>14, 'statusPenduduk'=>'penduduk tidak tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
            ['nik'=>"3570000000000151", 'nama'=>"Sari Ningsih", 'tempatLahir'=>"Surabaya", 'tanggalLahir'=>'2001-12-19', 'jenisKelamin'=>'P', , 'noRt'=>'03', 'agama'=>'buddha', 'pekerjaan'=>'mahasiswa', 'statusNikah'=>'belum', 'warganegara'=>'WNA', 'id_kartuKeluarga'=>15, 'statusPenduduk'=>'penduduk tidak tetap', 'jabatan'=>'Tidak Ada', 'gaji'=>3000000],
        ];
        DB::table('tb_penduduk')->insert($data);
    }
}
