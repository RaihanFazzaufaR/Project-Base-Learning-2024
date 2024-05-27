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
            ['user_id'=>1, 'email'=>'fazzaufa94raihan@gmail.com','username'=>'RaihanFR', 'password'=>Hash::make('123456'), 'id_penduduk'=>1, 'id_level'=>1,  'image'=>'user1.jpg'],
            ['user_id'=>2, 'email'=>'maulidinzakaria123@gmail.com','username'=>'ZakariaM', 'password'=>Hash::make('123456'), 'id_penduduk'=>3,'id_level'=>1,  'image'=>'user2.jpg'],
            ['user_id'=>3, 'email'=>'2241720168@student.polinema.ac.id','username'=>'LuckyK', 'password'=>Hash::make('123456'), 'id_penduduk'=>6, 'id_level'=>1, 'image'=>'user3.jpg'],
            ['user_id'=>4, 'email'=>'sonywib04@gmail.com','username'=>'SonyF', 'password'=>Hash::make('123456'), 'id_penduduk'=>8, 'id_level'=>2, 'image'=>null],
            ['user_id'=>5, 'email'=>'2241720045@student.polinema.ac.id', 'username' => 'TirtaNR', 'password'=>Hash::make('123456'), 'id_penduduk'=>22, 'id_level'=>2, 'image'=>null],
            ['user_id'=>6, 'email'=>'user5test@gmail.com', 'username' => 'AbdulN', 'password'=>Hash::make('123456'), 'id_penduduk'=>7,'id_level'=>3, 'image'=>null],
        ];
        DB::table('tb_useraccount')->insert($data);
    }
}
