<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->integer('id');
            $table->string('username');
            $table->string('password');
            $table->string('kode_rs')->index();
            $table->string('level');
            $table->string('divisi');
        });
    }

    public function down()
    {
        Schema::dropIfExists('operators');
    }
};
