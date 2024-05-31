<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveTujuanIdFromTbDatasuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_permintaansurat', function (Blueprint $table) {
            $table->dropColumn('tujuan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_datasurat', function (Blueprint $table) {
            // Re-add the column as it was before deletion
            $table->bigInteger('tujuan_id')->unsigned()->nullable();
        });
    }
}
