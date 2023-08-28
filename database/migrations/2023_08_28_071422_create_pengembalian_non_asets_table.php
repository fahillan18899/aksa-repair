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
        Schema::create('pengembalian_non_asets', function (Blueprint $table) {
            $table->integer('id_pengembalian_non');
            $table->date('tanggal_perbaikan_non');
            $table->date('tanggal_pengembalian_non');
            $table->string('kerusakan_non');
            $table->string('lokasi_non');
            $table->string('keterangan_non');
            $table->string('teknisi1_non');
            $table->string('teknisi2_non');
            $table->string('ka_instalasi');
            $table->string('pelapor_non');
            $table->string('penerima_non');
            $table->string('penyebab_non');
            $table->string('analisis_kerusakan_non');
            $table->string('pengujian_suku_cadang_non');
            $table->string('solusi_perbaikan_non');
            $table->string('pemasangan_suku_cadang_non');
            $table->string('uji_fungsi_non');
            $table->string('penyimpanan_suku_cadang_bekas_non');
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
        Schema::dropIfExists('pengembalian_non_asets');
    }
};
