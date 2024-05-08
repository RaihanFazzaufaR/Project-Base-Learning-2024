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
            $table->id('user_id');
            $table->string('email', 100);
            $table->string('username', 100)->unique();
            $table->string('password', 100);
            $table->unsignedBigInteger('id_penduduk')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('tb_useraccount');
    }
};
