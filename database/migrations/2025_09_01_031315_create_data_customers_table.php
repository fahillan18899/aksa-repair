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
        Schema::create('data_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('jadwal')->nullable();
            $table->text('instansi')->nullable();
            $table->text('jumlah')->nullable();
            $table->text('realisasi')->nullable();
            $table->text('marketing')->nullable();
            $table->text('mobil')->nullable();
            $table->text('teknisi')->nullable();
            $table->text('wilayah')->nullable();
            $table->integer('pengerjaan')->defined("0");
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
        Schema::dropIfExists('data_customers');
    }
};
