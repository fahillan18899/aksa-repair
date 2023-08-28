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
        Schema::create('pengiriman_unregistrasis', function (Blueprint $table) {
            $table->string('Id_perbaikan_un');
            $table->date('Tanggal_Perbaikan_un');        
            $table->date('Tanggal_Pengiriman_un');        
            $table->string('Nama_Alat_un');        
            $table->string('Merek_Alat_un');        
            $table->string('Type_Alat_un');        
            $table->string('Serial_Number_un');        
            $table->string('Lokasi_Alat_un');        
            $table->string('Pelapor_un');        
            $table->string('Keterangan_un');        
            $table->string('Teknisi_1_un');        
            $table->string('Teknisi_2_un');        
            $table->string('Nama_Rekanan_un');        
            $table->string('Alamat_Rekanan_un');        
            $table->string('Teknisi_Rekanan_un');        
            $table->string('Telphone_Teknisi_REK_un');        
            $table->string('KA_Instalasi_un');        
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
        Schema::dropIfExists('pengiriman_unregistrasis');
    }
};
