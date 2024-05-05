<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tambahkan data UMKM
        $data = [
            [
                'nama' => 'Warung Sate Abang',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 121',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Warung sate lezat dengan berbagai pilihan daging dan sambal khas.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Bunga Ceria Florist',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 122',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Bunga Ceria Florist adalah destinasi terbaik untuk semua kebutuhan bunga Anda. 
                                Dari buket segar hingga rangkaian bunga eksklusif untuk acara istimewa, kami menyediakan 
                                pilihan terbaik dengan kualitas terbaik.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Kuliner Nusantara Abadi',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 123',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Kuliner Nusantara Abadi adalah surga bagi pecinta makanan lokal. Nikmati lezatnya aneka masakan 
                                tradisional dari seluruh Nusantara dalam suasana yang nyaman dan ramah di kantong.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Gadget Express',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 124',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Gadget Express adalah tempat tujuan terpercaya untuk semua kebutuhan teknologi Anda. 
                                Dari smartphone terbaru hingga aksesori canggih, kami menyediakan produk-produk terkini 
                                dengan layanan pelanggan yang tak tertandingi.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Pusat Pakaian Elegan',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 125',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Pusat Pakaian Elegan adalah destinasi fashion yang memadukan gaya klasik dan trendi. 
                                Temukan koleksi pakaian, aksesori, dan sepatu untuk setiap kesempatan dengan kualitas 
                                dan harga yang tak tertandingi.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Buku Ceria',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 126',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Buku Ceria adalah surganya para pecinta literatur. Dari novel bestseller hingga buku anak-anak yang 
                                menginspirasi, kami menawarkan beragam pilihan bacaan untuk semua usia dan minat.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Kopi Kenangan Hangat',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 127',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Kopi Kenangan Hangat adalah tempat yang sempurna untuk menikmati kopi berkualitas premium dan camilan lezat.
                                Dengan suasana yang nyaman dan hangat, kami mengundang Anda untuk menikmati momen-momen istimewa dengan 
                                secangkir kopi di tangan.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Health Haven Apotek',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 128',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Health Haven Apotek adalah mitra terpercaya Anda dalam perawatan kesehatan. Dari obat-obatan hingga produk 
                                perawatan diri, kami menyediakan layanan yang berfokus pada kesehatan dan kesejahteraan Anda.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Rumah Dekorasi Idaman',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 129',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Rumah Dekorasi Idaman adalah destinasi utama untuk menemukan dekorasi rumah yang elegan dan unik. 
                                Dari perabotan hingga dekorasi dinding, kami menawarkan berbagai pilihan untuk membantu Anda menciptakan 
                                ruang yang Anda impikan.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Sari Segar Market',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 130',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Sari Segar Market adalah pasar lokal yang menyediakan berbagai produk segar dan berkualitas. Dari 
                                buah-buahan segar hingga sayuran organik, kami berkomitmen untuk memberikan pelanggan pengalaman 
                                berbelanja yang memuaskan.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diterima',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => now(),
            ],
            [
                'nama' => 'Sports Zone Outlet',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 131',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Sports Zone Outlet adalah destinasi terbaik untuk para penggemar olahraga. Temukan beragam 
                                perlengkapan olahraga dan pakaian performa tinggi dari merek-merek terkemuka dengan harga terjangkau.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diproses',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => null,
            ],
            [
                'nama' => 'Artisan Bakery Corner',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 132',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Artisan Bakery Corner adalah tempat yang sempurna untuk menemukan roti dan kue segar yang dibuat dengan 
                                cinta dan keterampilan. Nikmati berbagai pilihan roti gandum, kue-kue lezat, dan pastri yang menggoda selera.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diproses',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => null,
            ],
            [
                'nama' => 'Fashionista Boutique',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 133',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Fashionista Boutique adalah destinasi mode yang menawarkan koleksi pakaian dan aksesori terbaru sesuai 
                                dengan tren terkini. Dengan gaya yang beragam dan kualitas yang terjamin, kami membantu Anda 
                                mengekspresikan diri melalui busana.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diproses',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => null,
            ],
            [
                'nama' => 'Tech Savvy Solutions',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 134',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Tech Savvy Solutions adalah ahli dalam menyediakan solusi teknologi yang inovatif untuk kebutuhan 
                                personal dan bisnis Anda. Dari perangkat keras hingga perangkat lunak, kami memberikan solusi yang 
                                dapat diandalkan dan efisien.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diproses',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => null,
            ],
            [
                'nama' => 'Organic Delights Mart',
                'no_wa' => '081234567890',
                'id_pemilik' => 8,
                'lokasi' => 'Jl. Gatot Subroto No. 135',
                'buka_waktu' => '09:30',
                'tutup_waktu' => '21:00',
                'deskripsi' => 'Organic Delights Mart adalah tempat yang menyediakan berbagai produk organik dan alami untuk gaya 
                                hidup sehat. Dari makanan hingga produk kecantikan, kami menyediakan pilihan terbaik untuk Anda yang 
                                peduli akan kesehatan dan lingkungan.',
                'lokasi_map' => '-7.9797,112.6304',
                'foto' => null,
                'status' => 'diproses',
                'alasan_warga' => null,
                'alasan_rw' => null,
                'tanggal_disetujui' => null,
            ],
        ];

        DB::table('tb_umkm')->insert($data);
    }
}