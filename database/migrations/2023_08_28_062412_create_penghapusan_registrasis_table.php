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
        Schema::create('penghapusan_registrasis', function (Blueprint $table) {
            $table->string('Id_Perbaikan_reg');
            $table->string('Tanggal_Perbaikan_reg');
            $table->date('Tanggal_Penggudangan_reg');
            $table->string('Nama_Alat_reg');
            $table->string('Merek_Alat_reg');
            $table->string('Type_Alat_reg');
            $table->string('Serial_Number_reg');
            $table->string('Lokasi_Alat_reg');
            $table->string('Pelapor_reg');
            $table->string('Teknisi_1_reg');
            $table->string('Teknisi_2_reg');
            $table->string('KA_Instalasi_reg');
            $table->string('Keterangan_Pengguna_reg');
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
        Schema::dropIfExists('penghapusan_registrasis');
    }
};
