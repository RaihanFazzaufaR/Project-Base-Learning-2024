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
        Schema::table('tb_useraccount', function (Blueprint $table) {
            $table->foreign(['id_penduduk'], 'tb_useraccount_ibfk_1')->references(['id_penduduk'])->on('tb_penduduk')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_level'], 'tb_useraccount_ibfk_2')->references(['level_id'])->on('tb_level')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_useraccount', function (Blueprint $table) {
            $table->dropForeign('tb_useraccount_ibfk_1');
            $table->dropForeign('tb_useraccount_ibfk_2');
        });
    }
};
