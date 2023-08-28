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
        Schema::create('pemeliharaan_alats', function (Blueprint $table) {
            $table->integer('id_ppm');
            $table->string('tanggal');            
            $table->string('kegiatan');            
            $table->string('engineer');            
            $table->string('id_aset');            
            $table->string('nama_alat');            
            $table->string('serial_number');            
            $table->string('merek');            
            $table->string('instalasi');            
            $table->string('tipe');            
            $table->string('ruangan');
            
            







            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeliharaan_alats');
    }
};
