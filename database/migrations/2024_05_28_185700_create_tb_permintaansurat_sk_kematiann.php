<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_permintaansurat_sk_kematian', function (Blueprint $table) {
            $table->id('skKematian_id');
            $table->string('nama');
            $table->string('nik');
            $table->string('nomor_kk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('usia');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('warganegara');
            $table->string('alamat');
            $table->string('penyebab_kematian');
            $table->string('tempat_meninggal');
            $table->string('nama_pelapor');
            $table->string('hubungan_pelapor');
            $table->dateTime('tanggal_wafat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_permintaansurat_sk_kematian');
    }
};
