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
        Schema::create('tb_aduan', function (Blueprint $table) {
            $table->id('aduan_id');
            $table->string('judul');
            $table->unsignedBigInteger('pengadu_id');
            $table->text('konten_aduan');
            $table->string('image')->nullable();
            $table->enum('prioritas', ['biasa', 'penting', 'darurat']);
            $table->enum('status', ['diproses', 'selesai', 'ditolak']);
            $table->date('dibuat_tanggal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_aduan');
    }
};
