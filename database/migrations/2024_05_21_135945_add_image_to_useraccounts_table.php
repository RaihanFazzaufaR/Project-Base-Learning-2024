<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToUseraccountsTable extends Migration
{
    public function up()
    {
        Schema::table('tb_useraccount', function (Blueprint $table) {
            $table->string('image')->nullable()->after('password');
        });
    }

    public function down()
    {
        Schema::table('tb_useraccount', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}

