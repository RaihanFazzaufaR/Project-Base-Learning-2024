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
        Schema::table('tb_bansos', function (Blueprint $table) {
            $table->foreign(['penerima_id'], 'tb_bansos_ibfk_1')->references(['niKeluarga'])->on('tb_kartukeluarga')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['pengambil_id'], 'tb_bansos_ibfk_2')->references(['nik'])->on('tb_penduduk')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_bansos', function (Blueprint $table) {
            $table->dropForeign('tb_bansos_ibfk_1');
            $table->dropForeign('tb_bansos_ibfk_2');
        });
    }
};
