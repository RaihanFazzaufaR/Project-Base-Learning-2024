<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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
            $table->string('pemilik_id', 17)->index('pemilik_id');
            $table->string('lokasi', 100);
            $table->enum('tipe', ['barang', 'jasa']);
            $table->time('buka_waktu');
            $table->time('tutup_waktu');
            $table->text('deskripsi')->nullable();
            $table->text('lokasi_map')->nullable();
            $table->enum('status', ['diproses', 'selesai', 'ditolak']);
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
