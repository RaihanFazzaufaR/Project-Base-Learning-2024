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
        Schema::create('tb_surat', function (Blueprint $table) {
            $table->id('surat_id');

            // Columns from tb_permintaansurat
            $table->unsignedBigInteger('peminta_id');
            $table->date('minta_tanggal')->nullable();
            $table->enum('status', ['diproses', 'selesai', 'ditolak', 'menunggu']);
            $table->text('keperluan');
            $table->unsignedBigInteger('template_id');

            // Columns from tb_datasurat
            $table->string('tempatLahir', 100)->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->enum('jenisKelamin', ['L', 'P'])->nullable();
            $table->enum('statusNikah', ['belum', 'sudah'])->nullable();
            $table->string('nik', 17)->nullable();
            $table->string('nikeluarga', 20)->nullable();
            $table->enum('warganegara', ['WNI', 'WNA'])->nullable();
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'konghucu', 'lainnya'])->nullable();
            $table->string('pekerjaan', 20)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('penyebab_kematian')->nullable();
            $table->string('tempat_meninggal')->nullable();
            $table->string('nama_pelapor')->nullable();
            $table->string('hubungan_pelapor')->nullable();
            $table->dateTime('tanggal_wafat')->nullable();
            $table->text('alamat_pindah')->nullable();
            $table->text('alasan_pindah')->nullable();
            $table->unsignedSmallInteger('jumlah_keluarga_pindah')->nullable();

            // Foreign key relationships (if needed)
            $table->foreign('peminta_id')->references('id_penduduk')->on('tb_penduduk')->onDelete('cascade');
            $table->foreign('template_id')->references('template_id')->on('tb_template')->onDelete('cascade');

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
        Schema::dropIfExists('tb_surat');
    }
};
