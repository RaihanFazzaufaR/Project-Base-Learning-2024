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
        Schema::table('tb_leveldetail', function (Blueprint $table) {
            $table->foreign(['user_id'], 'tb_leveldetail_ibfk_1')->references(['user_id'])->on('tb_useraccount')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['level_id'], 'tb_leveldetail_ibfk_2')->references(['level_id'])->on('tb_level')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_leveldetail', function (Blueprint $table) {
            $table->dropForeign('tb_leveldetail_ibfk_1');
            $table->dropForeign('tb_leveldetail_ibfk_2');
        });
    }
};
