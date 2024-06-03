<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LevelSeeder::class,
            KartuKeluargaSeeder::class,
            PendudukSeeder::class,
            UserAccountSeeder::class,
            BansosSeeder::class,
            JadwalSeeder::class,
            KategoriSeeder::class,
            UmkmSeeder::class,
            UmkmKategoriSeeder::class,
            templateSuratSeeder::class,
            AduanSeeder::class,
            ResponSeeder::class,
            PengumumanSeeder::class,
        ]);
    }
}
