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
            $table->id('id_penduduk');
            $table->string('nik', 17)->unique();
            $table->string('nama', 100);
            $table->string('tempatLahir', 25);
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin', ['L', 'P']);
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'khonghucu', 'lainnya']);
            $table->string('pekerjaan', 20);
            $table->enum('statusNikah', ['belum', 'sudah']);
            $table->enum('warganegara', ['WNI', 'WNA']);
            $table->unsignedBigInteger('id_kartuKeluarga');
            $table->enum('statusPenduduk', ['penduduk tetap', 'penduduk tidak tetap']);
            $table->enum('jabatan', ['Ketua RW', 'Ketua RT', 'Bendahara', 'Sekretaris', 'Tidak ada']);
            $table->decimal('gaji', 15)->nullable();
            $table->string('noTelp', 15)->nullable();
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
        Schema::dropIfExists('tb_penduduk');
    }
};
