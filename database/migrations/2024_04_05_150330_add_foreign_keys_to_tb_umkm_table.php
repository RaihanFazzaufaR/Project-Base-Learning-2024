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
        Schema::table('tb_umkm', function (Blueprint $table) {
            $table->foreign(['pemilik_id'], 'tb_umkm_ibfk_1')->references(['nik'])->on('tb_penduduk')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['kategori_id'], 'tb_umkm_ibfk_2')->references(['kategori_id'])->on('tb_kategoriumkm')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_umkm', function (Blueprint $table) {
            $table->dropForeign('tb_umkm_ibfk_1');
            $table->dropForeign('tb_umkm_ibfk_2');
        });
    }
};
