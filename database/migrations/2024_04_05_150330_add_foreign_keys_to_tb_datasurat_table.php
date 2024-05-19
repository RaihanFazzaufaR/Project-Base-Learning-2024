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
        Schema::table('tb_datasurat', function (Blueprint $table) {
            $table->foreign(['permintaan_id'], 'tb_datasurat_ibfk_1')->references(['permintaan_id'])->on('tb_permintaansurat')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_datasurat', function (Blueprint $table) {
            $table->dropForeign('tb_datasurat_ibfk_1');
        });
    }
};
