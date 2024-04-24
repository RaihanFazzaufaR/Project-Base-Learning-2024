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
        Schema::create('tb_useraccount', function (Blueprint $table) {
            $table->bigInteger('user_id', true);
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('nik', 17)->nullable()->index('nik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_useraccount');
    }
};
