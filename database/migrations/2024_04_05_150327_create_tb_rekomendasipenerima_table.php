<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ajuan_bansos', function (Blueprint $table) {
            $table->id('id_ajuanBansos');
            $table->unsignedBigInteger('id_kartuKeluarga');
            $table->enum('status_rumah', ['Kontrak/kos', 'Tinggal dengan keluarga', 'Milik sendiri']);
            $table->enum('tanggungan', ['1', '2', '3', '4', '5', '>5']);
            $table->enum('penghasilan_keluarga', ['<1.000.000', '1.000.000 - 2.000.000', '2.000.000 - 3.000.000', '3.000.000 - 4.000.000', '4.000.000 - 5.000.000', '>5.000.000']);
            $table->enum('luas_tempat_tinggal', ['<20m', '20m - 40m', '40m - 60m', '60m - 80m', '>80m']);
            $table->enum('pengeluaran_listrik', ['<50.000', '50.000 - 100.000', '100.000 - 200.000', '200.000 - 300.000', '>300.000']);
            $table->enum('status', ['diproses', 'diterima', 'ditolak']);
            $table->string('foto_rumah');
            $table->string('SKTM');
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
        Schema::dropIfExists('tb_ajuan_bansos');
    }
};