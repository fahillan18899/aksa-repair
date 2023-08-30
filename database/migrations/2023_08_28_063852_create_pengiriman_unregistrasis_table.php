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
            $table->string('id_perbaikan_un');
            $table->date('tanggal_perbaikan_un');        
            $table->date('tanggal_pengiriman_un');        
            $table->string('nama_alat_un');        
            $table->string('merek_alat_un');        
            $table->string('type_alat_un');        
            $table->string('serial_number_un');        
            $table->string('lokasi_alat_un');        
            $table->string('pelapor_un');        
            $table->string('keterangan_un');        
            $table->string('teknisi_1_un');        
            $table->string('teknisi_2_un');        
            $table->string('teknisi_3_un');        
            $table->string('nama_rekanan_un');        
            $table->string('alamat_rekanan_un');        
            $table->string('teknisi_rekanan_un');        
            $table->string('telphone_teknisi_rek_un');        
            $table->string('ka_instalasi_un');        
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
