<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_umkm', function (Blueprint $table) {
            $table->bigInteger('umkm_id', true);
            $table->string('nama', 50);
            $table->string('no_wa', 50);
            $table->unsignedBigInteger('id_pemilik');
            $table->string('lokasi', 100);
            $table->unsignedBigInteger('umkm_kategori_id');
            $table->time('buka_waktu');
            $table->time('tutup_waktu');
            $table->text('deskripsi')->nullable();
            $table->text('lokasi_map')->nullable();
            $table->text('foto')->nullable();
            $table->enum('status', ['diproses', 'diterima', 'ditolak', 'dibatalkan']);
            $table->text('alasan_warga')->nullable();
            $table->text('alasan_rw')->nullable();
            $table->timestamp('tanggal_disetujui')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_umkm');
    }
};