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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('marketing')->nullable();
            $table->text('instansi')->nullable();
            $table->text('jumlah')->nullable();
            $table->text('nominal')->nullable();
            $table->text('document')->nullable();
            $table->text('tanggal_bayar')->nullable();
            $table->text('system_bayar')->nullable();
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
