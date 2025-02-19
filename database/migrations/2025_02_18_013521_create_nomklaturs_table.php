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
        Schema::create('nomklaturs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_nomklatur');
            $table->string('nama_nomklatur');
            $table->string('kode_nomklatur');
            $table->string('kode_rs');
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
        Schema::dropIfExists('nomklaturs');
    }
};
