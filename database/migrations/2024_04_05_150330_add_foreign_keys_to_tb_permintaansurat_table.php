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
        Schema::table('tb_permintaansurat', function (Blueprint $table) {
            $table->foreign(['peminta_id'], 'tb_permintaansurat_ibfk_1')->references(['nik'])->on('tb_penduduk')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['template_id'], 'tb_permintaansurat_ibfk_2')->references(['template_id'])->on('tb_template')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_permintaansurat', function (Blueprint $table) {
            $table->dropForeign('tb_permintaansurat_ibfk_1');
            $table->dropForeign('tb_permintaansurat_ibfk_2');
        });
    }
};
