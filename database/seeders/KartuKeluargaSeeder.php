<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KartuKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['niKeluarga'=>"3304111001000001", 'jmlAnggota'=>2, , 'alamat'=>"Jl. Soekarno-Hatta No. 123, Kel. Lowokwaru, Kec. Lowokwaru, Malang, 65141", 'kepalaKeluarga'=>"3570000000000011"],
            ['niKeluarga'=>"3304111001000002", 'jmlAnggota'=>3, , 'alamat'=>"Jl. Ijen No. 456, Kel. Klojen, Kec. Klojen, Malang, 65112", 'kepalaKeluarga'=>"3570000000000021"],
            ['niKeluarga'=>"3304111001000003", 'jmlAnggota'=>2, , 'alamat'=>"Jl. Semeru No. 789, Kel. Sukun, Kec. Sukun, Malang, 65147", 'kepalaKeluarga'=>"3570000000000031"],
            ['niKeluarga'=>"3304111001000004", 'jmlAnggota'=>1, , 'alamat'=>"Jl. Raya Batu No. 321, Kel. Sumberadi, Kec. Batu, Malang, 65312", 'kepalaKeluarga'=>"3570000000000041"],
            ['niKeluarga'=>"3304111001000005", 'jmlAnggota'=>3, , 'alamat'=>"Jl. Veteran No. 555, Kel. Kotalama, Kec. Klojen, Malang, 65112", 'kepalaKeluarga'=>"3570000000000051"],
            ['niKeluarga'=>"3304111001000006", 'jmlAnggota'=>2, , 'alamat'=>"Jl. MT Haryono No. 789, Kel. Bandungrejosari, Kec. Blimbing, Malang, 65125", 'kepalaKeluarga'=>"3570000000000061"],
            ['niKeluarga'=>"3304111001000007", 'jmlAnggota'=>2, , 'alamat'=>"Jl. Mayjend Sungkono No. 101, Kel. Purwantoro, Kec. Blimbing, Malang, 65125", 'kepalaKeluarga'=>"3570000000000071"],
            ['niKeluarga'=>"3304111001000008", 'jmlAnggota'=>3, , 'alamat'=>"Jl. Basuki Rahmat No. 232, Kel. Bunulrejo, Kec. Singosari, Malang, 65153", 'kepalaKeluarga'=>"3570000000000081"],
            ['niKeluarga'=>"3304111001000009", 'jmlAnggota'=>2, , 'alamat'=>"Jl. KH Agus Salim No. 432, Kel. Tlogomas, Kec. Lowokwaru, Malang, 65144", 'kepalaKeluarga'=>"3570000000000091"],
            ['niKeluarga'=>"3304111001000010", 'jmlAnggota'=>4, , 'alamat'=>"Jl. Gajahmada No. 321, Kel. Kedungkandang, Kec. Kedungkandang, Malang, 65132", 'kepalaKeluarga'=>"3570000000000101"],
            ['niKeluarga'=>"3304111001000011", 'jmlAnggota'=>2, , 'alamat'=>"Jl. Pahlawan No. 565, Kel. Arjosari, Kec. Blimbing, Malang, 65126", 'kepalaKeluarga'=>"3570000000000111"],
            ['niKeluarga'=>"3304111001000012", 'jmlAnggota'=>5, , 'alamat'=>"Jl. Ciliwung No. 111, Kel. Merjosari, Kec. Sukun, Malang, 65147", 'kepalaKeluarga'=>"3570000000000121"],
            ['niKeluarga'=>"3304111001000013", 'jmlAnggota'=>2, , 'alamat'=>"Jl. Ahmad Yani No. 888, Kel. Bandung, Kec. Lowokwaru, Malang, 65141", 'kepalaKeluarga'=>"3570000000000131"],
            ['niKeluarga'=>"3304111001000014", 'jmlAnggota'=>3, , 'alamat'=>"Jl. Dr. Soetomo No. 234, Kel. Sumbersari, Kec. Lowokwaru, Malang, 65141", 'kepalaKeluarga'=>"3570000000000141"],
            ['niKeluarga'=>"3304111001000015", 'jmlAnggota'=>2, , 'alamat'=>"Jl. WR Supratman No. 333, Kel. Landungsari, Kec. Lowokwaru, Malang, 65141", 'kepalaKeluarga'=>"3570000000000151"],
        ];
        DB::table('tb_kartukeluarga')->insert($data);
    }
}
