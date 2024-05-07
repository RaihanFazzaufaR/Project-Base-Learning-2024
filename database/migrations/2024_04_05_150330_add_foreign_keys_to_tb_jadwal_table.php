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
        Schema::table('tb_jadwal', function (Blueprint $table) {
            $table->foreign(['pembuat_id'], 'tb_jadwal_ibfk_1')->references(['id_penduduk'])->on('tb_penduduk')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_jadwal', function (Blueprint $table) {
            $table->dropForeign('tb_jadwal_ibfk_1');
        });
    }
};
