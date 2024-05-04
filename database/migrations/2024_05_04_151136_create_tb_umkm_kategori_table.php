<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbUmkmKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_umkm_kategori', function (Blueprint $table) {
            $table->foreign('umkm_id')->references('umkm_id')->on('tb_umkm');
            $table->foreign('kategori_id')->references('kategori_id')->on('tb_kategori');
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
            $table->dropForeign(['umkm_id']);
            $table->dropForeign(['kategori_id']);
        });
    }
}