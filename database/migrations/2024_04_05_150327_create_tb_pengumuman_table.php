<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pengumuman', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 100);
            $table->string('aktivitas_tipe', 20);
            $table->text('konten');
            $table->date('mulai_tanggal');
            $table->date('akhir_tanggal')->nullable();
            $table->time('mulai_waktu');
            $table->time('akhir_waktu')->nullable();
            $table->unsignedBigInteger('pembuat_id');
            $table->unsignedBigInteger('tujuan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_jadwal');
    }
};
