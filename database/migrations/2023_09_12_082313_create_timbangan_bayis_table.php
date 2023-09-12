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
        Schema::create('timbangan_bayis', function (Blueprint $table) {
            /**Data Pelanggan */
            $table->id();
            $table->string('nama_alat');
            $table->string('milik');
            $table->string('tipe');
            $table->string('no_seri');
            $table->string('rentang_ukur');
            $table->string('resolusi');
            /**Pelaksana Kalibrasi */
            $table->string('nama_instansi');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
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
        Schema::dropIfExists('timbangan_bayis');
    }
};
