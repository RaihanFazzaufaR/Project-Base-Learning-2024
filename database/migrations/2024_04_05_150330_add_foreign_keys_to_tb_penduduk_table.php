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
        Schema::table('tb_penduduk', function (Blueprint $table) {
            $table->foreign(['niKeluarga'], 'tb_penduduk_ibfk_1')->references(['niKeluarga'])->on('tb_kartukeluarga')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_penduduk', function (Blueprint $table) {
            $table->dropForeign('tb_penduduk_ibfk_1');
        });
    }
};
