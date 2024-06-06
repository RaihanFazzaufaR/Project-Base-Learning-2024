<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {
        $data = [
            ['nik' => "0000000000000001", 'nama' => "Admin", 'tempatLahir' => "Jakarta", 'tanggalLahir' => '2001-01-01', 'jenisKelamin' => 'L',  'agama' => 'lainnya', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNA', 'id_kartuKeluarga' => 1, 'statusPenduduk' => 'penduduk tidak tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 0, 'noTelp' => '0'],
            ['nik' => "3570000000000011", 'nama' => "Raihan Fazzaufa Rasendriya", 'tempatLahir' => "Jombang", 'tanggalLahir' => '2004-03-03', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 2, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RW', 'gaji' => 2000000, 'noTelp' => '081234567890'],
            ['nik' => "3570000000000012", 'nama' => "Ahmad Wibowo", 'tempatLahir' => "Jombang", 'tanggalLahir' => '2001-03-03', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 2, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 1000000, 'noTelp' => '081234567891'],
            ['nik' => "3570000000000021", 'nama' => "Maulidin Zakaria", 'tempatLahir' => "Jombang", 'tanggalLahir' => '2004-04-05', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 3, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 2700000, 'noTelp' => '081234567892'],
            ['nik' => "3570000000000022", 'nama' => "Muhammad Hidayat", 'tempatLahir' => "Jombang", 'tanggalLahir' => '1998-04-05', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 3, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 1000000, 'noTelp' => '081234567893'],
            ['nik' => "3570000000000023", 'nama' => "Rina Wati", 'tempatLahir' => "Jombang", 'tanggalLahir' => '2020-04-05', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 3, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 1000000, 'noTelp' => '081234567894'],
            ['nik' => "3570000000000031", 'nama' => "Lucky Kurniawan", 'tempatLahir' => "Malang", 'tanggalLahir' => '2003-12-03', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 4, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 2500000, 'noTelp' => '081234567895'],
            ['nik' => "3570000000000032", 'nama' => "Abdul Nugroho", 'tempatLahir' => "Malang", 'tanggalLahir' => '2010-12-03', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 4, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 1000000, 'noTelp' => '081234567896'],
            ['nik' => "3570000000000041", 'nama' => "Sony Febri Hari Wibowo", 'tempatLahir' => "Malang", 'tanggalLahir' => '2003-11-03', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 5, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 2400000, 'noTelp' => '081234567897'],
            ['nik' => "3570000000000051", 'nama' => "Agus Santoso", 'tempatLahir' => "Malang", 'tanggalLahir' => '1972-10-13', 'jenisKelamin' => 'L',  'agama' => 'kristen', 'pekerjaan' => 'dosen', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 6, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3500000, 'noTelp' => '081234567898'],
            ['nik' => "3570000000000052", 'nama' => "Siti Sari", 'tempatLahir' => "Malang", 'tanggalLahir' => '2089-10-13', 'jenisKelamin' => 'P',  'agama' => 'kristen', 'pekerjaan' => 'guru', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 6, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 3000000, 'noTelp' => '081234567899'],
            ['nik' => "3570000000000061", 'nama' => "Budi Kusuma", 'tempatLahir' => "Bojonegoro", 'tanggalLahir' => '1980-9-13', 'jenisKelamin' => 'L', 'agama' => 'kristen', 'pekerjaan'   => 'PNS', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 7, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567900'],
            ['nik' => "3570000000000071", 'nama' => "Andi Setiawan", 'tempatLahir' => "Nganjuk", 'tanggalLahir' => '1961-12-19', 'jenisKelamin' => 'L',  'agama' => 'buddha', 'pekerjaan' => 'Pedagang', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 8, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567901'],
            ['nik' => "3570000000000081", 'nama' => "Putra Purnama", 'tempatLahir' => "Malang", 'tanggalLahir' => '2017-12-19', 'jenisKelamin' => 'L',  'agama' => 'konghucu', 'pekerjaan' => 'Pengusaha', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 9, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567902'],
            ['nik' => "3570000000000091", 'nama' => "Joko Yulianto", 'tempatLahir' => "Malang", 'tanggalLahir' => '2020-12-19', 'jenisKelamin' => 'L',  'agama' => 'hindu', 'pekerjaan' => 'Pengusaha', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 10, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567903'],
            ['nik' => "3570000000000101", 'nama' => "Tono Subastio", 'tempatLahir' => "Malang", 'tanggalLahir' => '2024-12-19', 'jenisKelamin' => 'L',  'agama' => 'hindu', 'pekerjaan' => 'Buruh', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 11, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567904'],
            ['nik' => "3570000000000102", 'nama' => "Lina Sukarno", 'tempatLahir' => "Malang", 'tanggalLahir' => '2015-12-19', 'jenisKelamin' => 'P',  'agama' => 'hindu', 'pekerjaan' => 'Buruh', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 11, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 3000000, 'noTelp' => '081234567905'],
            ['nik' => "3570000000000111", 'nama' => "Firman Jaya", 'tempatLahir' => "Malang", 'tanggalLahir' => '2009-12-19', 'jenisKelamin' => 'L', 'agama' => 'konghucu', 'pekerjaan' => 'Tani', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 12, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567906'],
            ['nik' => "3570000000000121", 'nama' => "Ruben Diaz", 'tempatLahir' => "New York", 'tanggalLahir' => '1970-12-19', 'jenisKelamin' => 'L',  'agama' => 'katolik', 'pekerjaan' => 'Pengusaha', 'statusNikah' => 'sudah', 'warganegara' => 'WNA', 'id_kartuKeluarga' => 13, 'statusPenduduk' => 'penduduk tidak tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567907'],
            ['nik' => "3570000000000131", 'nama' => "Eko Wijaya", 'tempatLahir' => "Mojokerto", 'tanggalLahir' => '1988-12-19', 'jenisKelamin' => 'L',  'agama' => 'katolik', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNA', 'id_kartuKeluarga' => 14, 'statusPenduduk' => 'penduduk tidak tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567908'],
            ['nik' => "3570000000000141", 'nama' => "Surya Pratama", 'tempatLahir' => "Sidoarjo", 'tanggalLahir' => '1945-12-19', 'jenisKelamin' => 'L',  'agama' => 'katolik', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNA', 'id_kartuKeluarga' => 15, 'statusPenduduk' => 'penduduk tidak tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567909'],
            ['nik' => "3570000000000151", 'nama' => "Sari Ningsih", 'tempatLahir' => "Surabaya", 'tanggalLahir' => '1950-12-19', 'jenisKelamin' => 'P',  'agama' => 'buddha', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNA', 'id_kartuKeluarga' => 16, 'statusPenduduk' => 'penduduk tidak tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 3000000, 'noTelp' => '081234567910'],
            ['nik' => "3570000000000161", 'nama' => "Tirta Nurrochman Bintang Prawira", 'tempatLahir' => "Surabaya", 'tanggalLahir' => '1995-12-19', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 17, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Ketua RT', 'gaji' => 3000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000171", 'nama' => "Eko Candra", 'tempatLahir' => "Surabaya", 'tanggalLahir' => '1995-12-19', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 18, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 3000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000181", 'nama' => "Aditya Wijaya", 'tempatLahir' => "Jakarta", 'tanggalLahir' => '1989-7-20', 'jenisKelamin' => 'L',  'agama' => 'kristen', 'pekerjaan' => 'PNS', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 19, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 15000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000191", 'nama' => "Andi Firmansyah", 'tempatLahir' => "Bandung", 'tanggalLahir' => '1975-8-5', 'jenisKelamin' => 'L',  'agama' => 'buddha', 'pekerjaan' => 'Insinyur', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 20, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 7500000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000201", 'nama' => "Budi Santoso", 'tempatLahir' => "Gresik", 'tanggalLahir' => '1992-4-10', 'jenisKelamin' => 'L',  'agama' => 'hindu', 'pekerjaan' => 'Dokter', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 21, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 100000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000211", 'nama' => "Rudi Hartono", 'tempatLahir' => "Medan", 'tanggalLahir' => '1980-12-15', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'Dosen', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 22, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 15000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000221", 'nama' => "Agus Salim", 'tempatLahir' => "Semarang", 'tanggalLahir' => '1991-1-1', 'jenisKelamin' => 'L',  'agama' => 'konghucu', 'pekerjaan' => 'Guru', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 23, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 3570000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000231", 'nama' => "Joko Suryadi", 'tempatLahir' => "Malang", 'tanggalLahir' => '1999-9-9', 'jenisKelamin' => 'L',  'agama' => 'buddha', 'pekerjaan' => 'Koki', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 24, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak Ada', 'gaji' => 6890000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000241", 'nama' => "Rima Dewi Kusuma", 'tempatLahir' => "Bandung", 'tanggalLahir' => '1990-05-15', 'jenisKelamin' => 'P',  'agama' => 'islam', 'pekerjaan' => 'Guru', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 25, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak ada', 'gaji' => 3000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000251", 'nama' => "Budi Pratama Nugroho", 'tempatLahir' => "Surabaya", 'tanggalLahir' => '1988-09-20', 'jenisKelamin' => 'L',  'agama' => 'Kristen', 'pekerjaan' => 'Wiraswasta', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 26, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak ada', 'gaji' => 3000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000261", 'nama' => "Agung Wijaya Santoso", 'tempatLahir' => "Jakarta", 'tanggalLahir' => '1985-07-08', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'insinyur', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 27, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak ada', 'gaji' => 3000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000271", 'nama' => "Reza Saputra Ramadhan", 'tempatLahir' => "Surakarta", 'tanggalLahir' => '1991-12-30', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'Programmer', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 28, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak ada', 'gaji' => 3000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000281", 'nama' => "Yoga Susanto Pratama", 'tempatLahir' => "Semarang", 'tanggalLahir' => '1993-02-08', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'Akademisi', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 29, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak ada', 'gaji' => 3000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000291", 'nama' => "Novita Sari Dewi", 'tempatLahir' => "Bandung", 'tanggalLahir' => '1996-10-12', 'jenisKelamin' => 'P',  'agama' => 'buddha', 'pekerjaan' => 'Penulis', 'statusNikah' => 'belum', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 30, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Bendahara', 'gaji' => 3000000, 'noTelp' => '081234567911'],
            ['nik' => "3570000000000301", 'nama' => "Dwi Kurniawan Siregar", 'tempatLahir' => "Medan", 'tanggalLahir' => '1989-04-05', 'jenisKelamin' => 'L',  'agama' => 'islam', 'pekerjaan' => 'Konsultan', 'statusNikah' => 'sudah', 'warganegara' => 'WNI', 'id_kartuKeluarga' => 31, 'statusPenduduk' => 'penduduk tetap', 'jabatan' => 'Tidak ada', 'gaji' => 3000000, 'noTelp' => '081234567911'],


        ];
        $faker = Faker::create('id_ID');

        for ($i = 17; $i <= 100; $i++) {
            $lastDigit = rand(2, 9); // Pilih angka acak antara 2 hingga 9 untuk angka terakhir pada nik
            $data[] = [
                'nik' => '3570000000000' . str_pad($i, 3, '0', STR_PAD_LEFT) . $lastDigit, // Menambahkan angka terakhir sesuai variabel $lastDigit
                'nama' => $faker->name(),
                'tempatLahir' => 'Kota ' . ($i % 10 + 1),
                'tanggalLahir' => '19' . rand(60, 99) . '-' . str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT) . '-' . str_pad(rand(1, 28), 2, '0', STR_PAD_LEFT),
                'jenisKelamin' => rand(0, 1) ? 'L' : 'P',
                'agama' => ['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'konghucu', 'lainnya'][rand(0, 6)],
                'pekerjaan' => ['Petani', 'Guru', 'Karyawan', 'Pedagang', 'Ibu Rumah Tangga'][rand(0, 4)],
                'statusNikah' => rand(0, 1) ? 'belum' : 'sudah',
                'warganegara' => 'WNI',
                'id_kartuKeluarga' => rand(1, 31),
                'statusPenduduk' => rand(0, 1) ? 'penduduk tetap' : 'penduduk tidak tetap',
                'jabatan' => 'Tidak ada',
                'gaji' => rand(0, 1) ? rand(1000000, 5000000) : null,
                'noTelp' => '0812' . rand(10000000, 99999999),
            ];
        }
        


        DB::table('tb_penduduk')->insert($data);
    }
}
