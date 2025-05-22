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
             $table->string('rs', 8);
             $table->string('divisi', 100);
             $table->string('rs_divisi', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
