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
            $table->date('tanggal_perbaikan_un')->nullable();        
            $table->date('tanggal_pengiriman_un')->nullable();        
            $table->string('nama_alat_un')->nullable();        
            $table->string('merek_alat_un')->nullable();        
            $table->string('type_alat_un')->nullable();        
            $table->string('serial_number_un')->nullable();        
            $table->string('lokasi_alat_un')->nullable();        
            $table->string('pelapor_un')->nullable();        
            $table->string('keterangan_un')->nullable();        
            $table->string('teknisi_1_un')->nullable();        
            $table->string('teknisi_2_un')->nullable();        
            $table->string('teknisi_3_un')->nullable();        
            $table->string('nama_rekanan_un')->nullable();        
            $table->string('alamat_rekanan_un')->nullable();        
            $table->string('teknisi_rekanan_un')->nullable();        
            $table->string('telphone_teknisi_rek_un')->nullable();        
            $table->string('ka_instalasi_un')->nullable();
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
        Schema::dropIfExists('pengiriman_unregistrasis');
    }
};
