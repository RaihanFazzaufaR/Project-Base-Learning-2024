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
        Schema::table('tb_respon', function (Blueprint $table) {
            $table->foreign(['aduan_id'], 'tb_respon_ibfk_1')->references(['aduan_id'])->on('tb_aduan')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['perespon_id'], 'tb_respon_ibfk_2')->references(['id_penduduk'])->on('tb_penduduk')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_respon', function (Blueprint $table) {
            $table->dropForeign('tb_respon_ibfk_1');
            $table->dropForeign('tb_respon_ibfk_2');
        });
    }
};
