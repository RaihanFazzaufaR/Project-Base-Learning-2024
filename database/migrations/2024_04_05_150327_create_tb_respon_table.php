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
        Schema::create('tb_respon', function (Blueprint $table) {
            $table->id('respon_id');
            $table->unsignedBigInteger('aduan_id');
            $table->unsignedBigInteger('perespon_id');
            $table->text('konten_respon')->nullable();
            $table->string('image')->nullable();
            $table->date('dibuat_tanggal')->nullable();
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
        Schema::dropIfExists('tb_respon');
    }
};
