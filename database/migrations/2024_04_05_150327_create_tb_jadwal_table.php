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
        Schema::create('tb_jadwal', function (Blueprint $table) {
            $table->bigInteger('jadwal_id', true);
            $table->string('judul', 50);
            $table->string('aktivitas_tipe', 20);
            $table->date('mulai_tanggal');
            $table->date('akhir_tanggal')->nullable();
            $table->time('mulai_waktu');
            $table->time('akhir_waktu');
            $table->text('konten');
            $table->string('pembuat_id', 17)->index('pembuat_id');
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
        Schema::dropIfExists('tb_jadwal');
    }
};
