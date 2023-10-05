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
        Schema::create('pengembalian_unregistrasis', function (Blueprint $table) {
            $table->string('id_perbaikan_un');
            $table->date('tanggal_perbaikan_un');
            $table->date('tanggal_pengembalian_un');
            $table->string('nama_alat_un');
            $table->string('peneriama_alat_un');
            $table->string('merek_alat_un');
            $table->string('ka_instalasi_un');
            $table->string('type_alat_un');
            $table->string('teknisi_1_un');
            $table->string('serial_number_un');
            $table->string('teknisi_2_un');
            $table->string('teknisi_3_un');
            $table->string('lokasi_alat_un');
            $table->string('keterangan_un');
            $table->string('pelapor_un');
            $table->string('harga_perbaikan_un');
            $table->string('penyebab_kerusakan_un');
            $table->string('pengujian_suku_cadang_un');
            $table->string('uji_fungsi_setelah_perbaikan_un');
            $table->string('solusi_perbaikan_un');
            $table->string('penggantian_suku_cadang_un');
            $table->string('hasil_verifikasi_un');
            $table->string('kode_rs', 10);
            $table->integer('active')->default(1);


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
        Schema::dropIfExists('pengembalian_unregistrasis');
    }
};
