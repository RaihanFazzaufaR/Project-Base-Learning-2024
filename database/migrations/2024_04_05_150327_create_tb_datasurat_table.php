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
        Schema::create('tb_datasurat', function (Blueprint $table) {
            $table->bigInteger('data_id', true);
            $table->bigInteger('permintaan_id')->index('permintaan_id');
            $table->date('tanggalLahir')->nullable();
            $table->enum('jenisKelamin', ['L', 'P'])->nullable();
            $table->enum('statusNikah', ['belum', 'sudah'])->nullable();
            $table->string('nik', 17)->nullable();
            $table->string('nikeluarga', 20)->nullable();
            $table->enum('warganegara', ['WNI', 'WNA'])->nullable();
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'buddha', 'konghucu'])->nullable();
            $table->string('pekerjaan', 20)->nullable();
            $table->string('alamat', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_datasurat');
    }
};
