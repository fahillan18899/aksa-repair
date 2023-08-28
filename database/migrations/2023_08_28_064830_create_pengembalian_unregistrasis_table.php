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
            $table->string('Id_Perbaikan_un');
            $table->date('Tanggal_Perbaikan_un');
            $table->date('Tanggal_Pengembalian_un');
            $table->string('Nama_Alat_un');
            $table->string('Peneriama_Alat_un');
            $table->string('Merek_Alat_un');
            $table->string('Ka_Instalasi_un');
            $table->string('Type_Alat_un');
            $table->string('Teknisi_1_un');
            $table->string('Serial_Number_un');
            $table->string('Teknisi_2_un');
            $table->string('Lokasi_Alat_un');
            $table->string('Keterangan_un');
            $table->string('Pelapor_un');
            $table->string('Harga_Perbaikan_un');
            $table->string('Penyebab_Kerusakan_un');
            $table->string('Pengujian_Suku_cadang_un');
            $table->string('Uji_Fungsi_Setelah_Perbaikan_un');
            $table->string('Solusi_Perbaikan_un');
            $table->string('Penggantian_Suku_cadang_un');
            $table->string('Hasil_Verifikasi_un');
            $table->string('kode_rs');
            $table->integer('active');            
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
