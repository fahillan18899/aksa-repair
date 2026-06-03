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
        Schema::create('invs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('id_alat')->nullable();
            $table->text('nama_alat')->nullable();
            $table->text('merek')->nullable();
            $table->text('type')->nullable();
            $table->text('seri')->nullable();
            $table->text('lokasi')->nullable();
            $table->text('jadwal')->nullable();
            $table->text('foto')->nullable();
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
        Schema::dropIfExists('invs');
    }
};
