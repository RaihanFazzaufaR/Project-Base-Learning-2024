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
        Schema::create('tb_aduan', function (Blueprint $table) {
            $table->bigInteger('aduan_id', true);
            $table->string('pengadu_id', 17)->index('pengadu_id');
            $table->string('kategori', 20);
            $table->text('konten');
            $table->date('dibuat_tanggal')->nullable();
            $table->enum('status', ['diproses', 'selesai', 'ditolak']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_aduan');
    }
};
