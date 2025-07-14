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
            $table->string('yth');
            $table->date('tgl_invoice');
            $table->string('no_invoice');
            $table->string('no_pesanan');
            $table->string('barang_jasa');
            $table->string('keterangan');
            $table->string('unit');
            $table->string('harga_satuan');
            $table->string('harga');
            $table->string('harga_tanpa_pajak');
            $table->string('pajak');
            $table->string('total');
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
