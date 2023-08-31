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
        Schema::create('stock_opnames', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->string('jenis');
            $table->string('lokasi_pemakaian');
            $table->integer('jumlah_masuk');
            $table->integer('jumlah_keluar');
            $table->integer('stock');
            $table->string('kode_rs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_opnames');
    }
};
