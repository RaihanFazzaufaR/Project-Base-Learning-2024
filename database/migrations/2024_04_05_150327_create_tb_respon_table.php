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
            $table->bigInteger('respon_id', true);
            $table->bigInteger('aduan_id')->index('aduan_id');
            $table->string('perespon_id', 17)->index('perespon_id');
            $table->text('konten_aduan');
            $table->text('konten_respon');
            $table->date('dibuat_tanggal')->nullable();
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
