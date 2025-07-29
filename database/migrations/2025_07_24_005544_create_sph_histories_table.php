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
        Schema::create('sph_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->text('lokasi_tanggal')->nullable();
            $table->text('no_surat')->nullable();
            $table->text('hal')->nullable();
            $table->text('yth')->nullable();
            $table->json('akom')->nullable();
            $table->json('part')->nullable();
            $table->json('nama_alat')->nullable();
            $table->json('keterangan')->nullable();
            $table->text('jumlah')->nullable();
            $table->text('harga')->nullable();
            $table->text('diskon')->nullable();
            $table->text('harga_diskon')->nullable();
            $table->text('harga_tanpa_pajak')->nullable();
            $table->text('pajak')->nullable();
            $table->text('total')->nullable();
            $table->text('user')->nullable();
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
        Schema::dropIfExists('sph_histories');
    }
};
