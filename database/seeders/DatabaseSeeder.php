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
            LevelDetailSeeder::class,
            BansosSeeder::class,
            JadwalSeeder::class,
            KategoriSeeder::class,
            UmkmSeeder::class,
            UmkmKategoriSeeder::class,
            templateSuratSeeder::class,
            PermintaanSuratSeeder::class,
            // DataSuratSeed::class,
        ]);
    }
}
