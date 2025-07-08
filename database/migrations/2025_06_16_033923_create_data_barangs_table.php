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
        Schema::create('data_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_urut');
            $table->string('nama_alat');
            $table->string('no_seri');
            $table->string('type');
            $table->string('kerusakan_alat');
            $table->string('instansi');
            $table->string('status');
            $table->string('ket');
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
        Schema::dropIfExists('data_barangs');
    }
};
