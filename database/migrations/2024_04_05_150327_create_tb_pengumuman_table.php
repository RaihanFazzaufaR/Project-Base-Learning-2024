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
            $table->id('pengumuman_id');
            $table->string('judul', 100);
            $table->string('aktivitas_tipe', 20)->nullable();
            $table->date('mulai_tanggal')->nullable();
            $table->date('akhir_tanggal')->nullable();
            $table->time('mulai_waktu')->nullable();
            $table->time('akhir_waktu')->nullable();
            $table->text('konten');
            $table->unsignedBigInteger('pembuat_id');
            $table->decimal('iuran', 15, 2)->nullable();
            $table->text('lokasi')->nullable();
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
