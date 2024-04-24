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
        Schema::create('tb_penduduk', function (Blueprint $table) {
            $table->string('nik', 17)->primary();
            $table->string('nama', 100);
            $table->string('tempatLahir', 25);
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin', ['L', 'P']);
            $table->string('alamat', 100);
            $table->string('noRt', 100);
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'Konghucu']);
            $table->string('pekerjaan', 20);
            $table->enum('statusNikah', ['belum', 'sudah']);
            $table->enum('warganegara', ['WNI', 'WNA']);
            $table->string('NIKeluarga', 17)->index('nikeluarga');
            $table->enum('statusDiRw', ['penduduk', 'RW', 'RT', 'penduduk tidak tetap', 'orang luar']);
            $table->decimal('gaji', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_penduduk');
    }
};
