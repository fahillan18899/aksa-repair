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
        Schema::create('penghapusan_unregistrasis', function (Blueprint $table) {
            $table->string('Id_Perbaikan_un');
            $table->date('Tanggal_Perbaikan_un');
            $table->string('Nama_Alat_un');
            $table->string('Merek_Alat_un');
            $table->string('Type_Alat_un');
            $table->string('Serial_Number_un');
            $table->string('Lokasi_Alat_un');
            $table->string('Pelapor_un');
            $table->string('Teknisi_1_un');
            $table->string('Teknisi_2_un');
            $table->string('Tanggal_Penggudangan_un');
            $table->string('KA_Instalasi_un');
            $table->string('Keterangan_Penggudangan_un');
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
        Schema::dropIfExists('penghapusan_unregistrasis');
    }
};
