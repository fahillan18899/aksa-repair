<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('user_role', 20)->default('user');
            $table->date('tanggal_lahir')->nullable()->change();
            $table->string('kode_rs')->index()->default('RS1');
            $table->string('firstname', 20)->nullable();
            $table->string('lastname', 20)->nullable();
            $table->string('sex', 20)->nullable();
            $table->string('designation', 20)->nullable();
            $table->string('address', 20)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('career_title', 20)->nullable();
            $table->string('short_biography', 20)->nullable();
            $table->string('specialist', 20)->nullable();
            $table->string('degree', 20)->nullable();
            $table->string('picture', 20)->nullable();
            $table->string('tambah_employee', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
