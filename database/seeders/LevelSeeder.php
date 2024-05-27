<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['level_id'=>1, 'levelNama'=>"admin" ],
            ['level_id'=>2, 'levelNama'=>"rt/rw" ],
            ['level_id'=>3, 'levelNama'=>"user" ],
        ];
        DB::table('tb_level')->insert($data);
    }
}
