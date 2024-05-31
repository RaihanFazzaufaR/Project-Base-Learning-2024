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
        Schema::table('tb_pengumuman', function (Blueprint $table) {
            $table->foreign('pembuat_id_jadwal', 'tb_pengumuman_ibfk_1')->references('id_penduduk')->on('tb_penduduk')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('pembuat_id_pengumuman', 'tb_pengumuman_ibfk_2')->references('id_penduduk')->on('tb_penduduk')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_pengumuman', function (Blueprint $table) {
            $table->dropForeign('tb_pengumuman_ibfk_1');
            $table->dropForeign('tb_pengumuman_ibfk_2');
        });
    }
};
