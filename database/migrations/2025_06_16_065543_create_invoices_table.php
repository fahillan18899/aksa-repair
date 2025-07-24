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
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->text('yth')->nullable();
            $table->text('tgl_invoice')->nullable();
            $table->text('no_invoice')->nullable();
            $table->text('no_pesanan')->nullable();
            $table->text('barang_jasa')->nullable();
            $table->text('keterangan')->nullable();
            $table->text('unit')->nullable();
            $table->text('harga_satuan')->nullable();
            $table->text('harga')->nullable();
            $table->text('harga_tanpa_pajak')->nullable();
            $table->text('pajak')->nullable();
            $table->text('total')->nullable();
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
        Schema::dropIfExists('invoices');
    }
};
