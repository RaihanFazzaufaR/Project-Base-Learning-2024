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
            ['user_id'=>1, 'username'=>'RaihanFR', 'password'=>Hash::make('123456'), 'nik'=>'3570000000000001'],
            ['user_id'=>2, 'username'=>'ZakariaM', 'password'=>Hash::make('123456'), 'nik'=>'3570000000000002'],
            ['user_id'=>3, 'username'=>'LuckyK', 'password'=>Hash::make('123456'), 'nik'=>'3570000000000003'],
            ['user_id'=>4, 'username'=>'SonyF', 'password'=>Hash::make('123456'), 'nik'=>'3570000000000004']
        ];
        DB::table('tb_useraccount')->insert($data);
    }
}
