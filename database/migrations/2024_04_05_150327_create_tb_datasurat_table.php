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
            $table->id('data_id');
            $table->unsignedBigInteger('permintaan_id');
            $table->string('tempatLahir', 100)->nullable(); // Menambah kolom tempatLahir
            $table->date('tanggalLahir')->nullable();
            $table->enum('jenisKelamin', ['L', 'P'])->nullable();
            $table->enum('statusNikah', ['belum', 'sudah'])->nullable();
            $table->string('nik', 17)->nullable();
            $table->string('nikeluarga', 20)->nullable();
            $table->enum('warganegara', ['WNI', 'WNA'])->nullable();
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'konghucu', 'lainnya']);
            $table->string('pekerjaan', 20)->nullable();
            $table->string('alamat', 100)->nullable();

            // Added columns for new input fields
            $table->string('penyebab_kematian')->nullable();
            $table->string('tempat_meninggal')->nullable();
            $table->string('nama_pelapor')->nullable();
            $table->string('hubungan_pelapor')->nullable();
            $table->dateTime('tanggal_wafat')->nullable();
            
            // Added columns for new input fields
            $table->text('alamat_pindah')->nullable();
            $table->text('alasan_pindah')->nullable();
            $table->integer('jumlah_keluarga_pindah')->nullable();
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
