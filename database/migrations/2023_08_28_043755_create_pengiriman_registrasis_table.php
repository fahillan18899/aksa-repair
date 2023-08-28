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
        Schema::create('pengiriman_registrasis', function (Blueprint $table) {
            $table->string('Id_Perbaikan_reg');
            $table->date('Tanggal_Perbaikan_reg');            
            $table->date('Tanggal_Pengiriman_reg');
            $table->string('Id_Aset_reg');
            $table->string('Nama_Alat_reg');
            $table->string('Merek_Alat_reg');
            $table->string('Type_Alat_reg');
            $table->string('Seri_Number_reg');
            $table->string('Lokasi_Alat_reg');
            $table->string('Teknisi_1_reg');
            $table->string('Pelapor_reg');
            $table->string('Teknisi_2_reg');
            $table->string('Keterangan_Kondisi_Alat_reg');
            $table->string('KA_Instalasi_reg');
            $table->string('Nama_Rekan_reg');
            $table->string('Alamat_Rekan_reg');
            $table->string('Teknisi_Rekanan_reg');
            $table->string('Telp_Teknisi_Rekanan_reg');
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
        Schema::dropIfExists('pengiriman_registrasis');
    }
};
