<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('stock_opnames', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('type')->nullable();
            $table->string('lokasi_pemakaian')->nullable();
            $table->integer('jumlah_masuk')->nullable();
            $table->integer('jumlah_sekarang')->nullable();
            $table->integer('jumlah_keluar')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->date('tanggal_keluar')->nullable();
            $table->integer('stock');
            $table->string('kode_rs');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_opnames');
    }
};
