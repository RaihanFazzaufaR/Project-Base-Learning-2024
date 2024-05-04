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
        Schema::create('tb_kartukeluarga', function (Blueprint $table) {
            $table->string('niKeluarga', 20)->primary();
            $table->integer('jmlAnggota');
            $table->string('alamat', 100);
            $table->string('kepalaKeluarga', 17);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_kartukeluarga');
    }
};
