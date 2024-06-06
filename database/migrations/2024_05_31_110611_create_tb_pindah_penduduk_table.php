<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPindahPendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pindahPenduduk', function (Blueprint $table) {
            // Primary key auto increment starting from 1
            $table->id('id_PindahPenduduk');

            // Foreign keys
            $table->unsignedBigInteger('id_foreign_penduduk');
            $table->unsignedBigInteger('id_foreign_surat');
            $table->unsignedBigInteger('id_foreign_kk');

            // Define foreign key constraints
            $table->foreign('id_foreign_penduduk')->references('id_penduduk')->on('tb_penduduk')->onDelete('cascade');
            $table->foreign('id_foreign_surat')->references('surat_id')->on('tb_surat')->onDelete('cascade');
            $table->foreign('id_foreign_kk')->references('id_kartuKeluarga')->on('tb_kartukeluarga')->onDelete('cascade');

            // Timestamps for record tracking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pindahPenduduk');
    }
}

