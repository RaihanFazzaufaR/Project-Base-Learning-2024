<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id'=>1, 'email'=>'fazzaufa94raihan@gmail.com','username'=>'RaihanFR', 'password'=>Hash::make('123456'), 'id_penduduk'=>1],
            ['user_id'=>2, 'email'=>'user1test@gmail.com','username'=>'ZakariaM', 'password'=>Hash::make('123456'), 'id_penduduk'=>3],
            ['user_id'=>3, 'email'=>'user2test@gmail.com','username'=>'LuckyK', 'password'=>Hash::make('123456'), 'id_penduduk'=>6],
            ['user_id'=>4, 'email'=>'user3test@gmail.com','username'=>'SonyF', 'password'=>Hash::make('123456'), 'id_penduduk'=>8],
            ['user_id'=>5, 'email'=>'user4test@gmail.com', 'username' => 'TirtaNR', 'password'=>Hash::make('123456'), 'id_penduduk'=>22]
        ];
        DB::table('tb_useraccount')->insert($data);
    }
}
