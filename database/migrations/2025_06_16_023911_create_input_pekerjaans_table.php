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
        Schema::create('input_pekerjaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_urut');
            $table->string('nama_alat');
            $table->string('merek');
            $table->string('type');
            $table->string('no_seri');
            $table->string('instansi');
            $table->string('kerusakan');
            $table->string('foto');
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
        Schema::dropIfExists('input_pekerjaans');
    }
};
