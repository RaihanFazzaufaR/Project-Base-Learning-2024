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
        Schema::create('tb_bansos', function (Blueprint $table) {
            $table->bigInteger('bansos_id', true);
            $table->string('penerima_id', 20)->index('penerima_id');
            $table->date('penerimaan_tanggal');
            $table->date('diterima_tanggal')->nullable();
            $table->string('penyelenggara', 20)->nullable();
            $table->string('pengambil_id', 17)->nullable()->index('pengambil_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_bansos');
    }
};
