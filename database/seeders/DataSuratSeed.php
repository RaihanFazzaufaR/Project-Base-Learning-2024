<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSuratSeed extends Seeder
{
    public function run(): void
    {
        $data = [
            ['permintaan_id'=>1,'tanggalLahir' => '2004-03-03', 'jenisKelamin' => 'L','statusNikah' => 'belum', 'nik' => "3570000000000011", 'nikeluarga' => "3304111001000002", 'warganegara' => 'WNI','agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Soekarno-Hatta No. 123, Kel. Lowokwaru, Kec. Lowokwaru, Malang, 65141"],
            ['permintaan_id'=>2,'tanggalLahir' => '2004-03-03', 'jenisKelamin' => 'L','statusNikah' => 'belum', 'nik' => "3570000000000012", 'nikeluarga' => "3304111001000002", 'warganegara' => 'WNI','agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Soekarno-Hatta No. 123, Kel. Lowokwaru, Kec. Lowokwaru, Malang, 65141"],
            ['permintaan_id'=>3,'tanggalLahir' => '2004-04-05', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000021", 'nikeluarga' => "3304111001000003",  'warganegara' => 'WNI','agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Semeru No. 789, Kel. Sukun, Kec. Sukun, Malang, 65147"],
            ['permintaan_id'=>4,'tanggalLahir' => '2004-04-05', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000022", 'nikeluarga' => "3304111001000004",  'warganegara' => 'WNI','agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Raya Batu No. 321, Kel. Sumberadi, Kec. Batu, Malang, 65312"],
            ['permintaan_id'=>5,'tanggalLahir' => '2004-04-05', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000023", 'nikeluarga' => "3304111001000005",  'warganegara' => 'WNI','agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Veteran No. 555, Kel. Kotalama, Kec. Klojen, Malang, 65112"],
            ['permintaan_id'=>6,'tanggalLahir' => '2003-12-03', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000031", 'nikeluarga' => "3304111001000005",  'warganegara' => 'WNI','agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Veteran No. 555, Kel. Kotalama, Kec. Klojen, Malang, 65112"],
            ['permintaan_id'=>7,'tanggalLahir' => '2003-12-03', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000032", 'nikeluarga' => "3304111001000007",  'warganegara' => 'WNI','agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Mayjend Sungkono No. 101, Kel. Purwantoro, Kec. Blimbing, Malang, 65125"],
            ['permintaan_id'=>8,'tanggalLahir' => '2003-11-03', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000041", 'nikeluarga' => "3304111001000008",  'warganegara' => 'WNI','agama' => 'islam', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Basuki Rahmat No. 232, Kel. Bunulrejo, Kec. Singosari, Malang, 65153",],
            ['permintaan_id'=>9,'tanggalLahir' => '2001-10-13', 'jenisKelamin' => 'L','statusNikah' => 'sudah','nik' => "3570000000000051", 'nikeluarga' => "3304111001000007",  'warganegara' => 'WNI','agama' => 'kristen', 'pekerjaan' => 'dosen', 'alamat'=>"Jl. Mayjend Sungkono No. 101, Kel. Purwantoro, Kec. Blimbing, Malang, 65125"],
            ['permintaan_id'=>10,'tanggalLahir' => '2002-10-13', 'jenisKelamin' => 'P','statusNikah' => 'sudah','nik' => "3570000000000052", 'nikeluarga' => "330411100100009",  'warganegara' => 'WNI','agama' => 'kristen', 'pekerjaan' => 'guru', 'alamat'=>"Jl. KH Agus Salim No. 432, Kel. Tlogomas, Kec. Lowokwaru, Malang, 65144"],
            ['permintaan_id'=>11,'tanggalLahir' => '2000-09-13', 'jenisKelamin' => 'L','statusNikah' => 'sudah','nik' => "3570000000000061", 'nikeluarga' => "3304111001000011", 'warganegara' => 'WNI','agama' => 'kristen', 'pekerjaan' => 'PNS', 'alamat'=>"Jl. Pahlawan No. 565, Kel. Arjosari, Kec. Blimbing, Malang, 65126"],
            ['permintaan_id'=>12,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000071", 'nikeluarga' => "3304111001000011", 'warganegara' => 'WNI','agama' => 'buddha', 'pekerjaan' => 'Pedagang', 'alamat'=>"Jl. Pahlawan No. 565, Kel. Arjosari, Kec. Blimbing, Malang, 65126"],
            ['permintaan_id'=>13,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000081", 'nikeluarga' => "3304111001000013", 'warganegara' => 'WNI','agama' => 'khonghucu', 'pekerjaan' => 'Pengusaha','alamat'=>"Jl. Ahmad Yani No. 888, Kel. Bandung, Kec. Lowokwaru, Malang, 65141"],
            ['permintaan_id'=>14,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000091", 'nikeluarga' => "3304111001000013", 'warganegara' => 'WNI','agama' => 'hindu', 'pekerjaan' => 'Pengusaha', 'alamat'=>"Jl. Ahmad Yani No. 888, Kel. Bandung, Kec. Lowokwaru, Malang, 65141"],
            ['permintaan_id'=>15,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'L','statusNikah' => 'sudah','nik' => "3570000000000101", 'nikeluarga' => "3304111001000012", 'warganegara' => 'WNI','agama' => 'hindu', 'pekerjaan' => 'Buruh', 'alamat'=>"Jl. Ciliwung No. 111, Kel. Merjosari, Kec. Sukun, Malang, 65147"],
            ['permintaan_id'=>16,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'P','statusNikah' => 'sudah','nik' => "3570000000000102", 'nikeluarga' => "3304111001000001", 'warganegara' => 'WNI','agama' => 'hindu', 'pekerjaan' => 'Buruh', 'alamat'=>"Jl. Soekarno-Hatta No. 123, Kel. Lowokwaru, Kec. Lowokwaru, Malang, 65141"],
            ['permintaan_id'=>17,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'L','statusNikah' => 'sudah','nik' => "3570000000000111", 'nikeluarga' => "3304111001000006", 'warganegara' => 'WNI','agama' => 'khonghucu', 'pekerjaan' => 'Tani', 'alamat'=>"Jl. MT Haryono No. 789, Kel. Bandungrejosari, Kec. Blimbing, Malang, 65125"],
            ['permintaan_id'=>18,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000121", 'nikeluarga' => "33041110010000014",'warganegara' => 'WNA','agama' => 'katolik', 'pekerjaan' => 'Pengusaha', 'alamat'=>"Jl. Dr. Soetomo No. 234, Kel. Sumbersari, Kec. Lowokwaru, Malang, 65141"],
            ['permintaan_id'=>19,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000131", 'nikeluarga' => "33041110010000014",'warganegara' => 'WNA','agama' => 'katolik', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Dr. Soetomo No. 234, Kel. Sumbersari, Kec. Lowokwaru, Malang, 65141"],
            ['permintaan_id'=>20,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000141", 'nikeluarga' => "33041110010000011",'warganegara' => 'WNA','agama' => 'katolik', 'pekerjaan' => 'mahasiswa', 'alamat'=>"Jl. Pahlawan No. 565, Kel. Arjosari, Kec. Blimbing, Malang, 65126"],
            ['permintaan_id'=>21,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'P','statusNikah' => 'belum','nik' => "3570000000000151", 'nikeluarga' => "33041110010000012",'warganegara' => 'WNA','agama' => 'buddha', 'pekerjaan' => 'mahasiswa','alamat'=>"Jl. Ciliwung No. 111, Kel. Merjosari, Kec. Sukun, Malang, 65147"],
            ['permintaan_id'=>22,'tanggalLahir' => '2001-12-19', 'jenisKelamin' => 'L','statusNikah' => 'belum','nik' => "3570000000000191", 'nikeluarga' => "33041110010000012",'warganegara' => 'WNI','agama' => 'islam', 'pekerjaan' => 'mahasiswa','alamat'=>"Jl. Ciliwung No. 111, Kel. Merjosari, Kec. Sukun, Malang, 65147"]
        ];
        DB::table('tb_datasurat')->insert($data);
    }
}
