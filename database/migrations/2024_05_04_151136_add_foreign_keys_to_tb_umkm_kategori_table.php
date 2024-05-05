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
        Schema::table('tb_umkm_kategori', function (Blueprint $table) {
            $table->foreign(['umkm_id'], 'tb_umkm_kategori_ibfk_1')->references('umkm_id')->on('tb_umkm');
            // $table->foreign(['kategori_id'], 'tb_umkm_kategori_ibfk_2')->references('kategori_id')->on('tb_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_umkm_kategori', function (Blueprint $table) {
            $table->dropForeign('tb_umkm_kategori_ibfk_1');
            $table->dropForeign('tb_umkm_kategori_ibfk_2');
        });
    }
};