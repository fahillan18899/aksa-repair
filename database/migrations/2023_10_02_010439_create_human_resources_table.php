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
        Schema::create('human_resources', function (Blueprint $table) {
            $table->id();
            $table->string('user_role', 20)->nullable();
            $table->string('firstname', 20)->nullable();
            $table->string('lastname', 20)->nullable();
            $table->string('username', 20)->nullable();
            $table->string('password', 20)->nullable();
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
            $table->string('kode_rs', 20)->nullable();
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
        Schema::dropIfExists('human_resources');
    }
};
