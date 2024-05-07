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
        Schema::create('tb_permintaansurat', function (Blueprint $table) {
            $table->bigInteger('permintaan_id', true);
            $table->unsignedBigInteger('peminta_id');
            $table->date('minta_tanggal');
            $table->enum('status', ['diproses', 'selesai', 'ditolak', 'menunggu']);
            $table->bigInteger('tujuan_id');
            $table->text('keperluan');
            $table->unsignedBigInteger('template_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_permintaansurat');
    }
};
