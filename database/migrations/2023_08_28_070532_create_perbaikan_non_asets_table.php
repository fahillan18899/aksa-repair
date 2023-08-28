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
        Schema::create('perbaikan_non_asets', function (Blueprint $table) {
            $table->integer('id_perbaikan_non');
            $table->date('Tanggal_Perbaikan_non');
            $table->string('Kerusakan_non');
            $table->string('Lokasi_non');
            $table->string('Keterangan_non');
            $table->string('Teknisi_1_non');
            $table->string('Teknisi_2_non');
            $table->string('Ka_ipsrs_non');
            $table->string('Pelapor_non');
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
        Schema::dropIfExists('perbaikan_non_asets');
    }
};
