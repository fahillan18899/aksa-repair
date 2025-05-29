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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->string('id_req');
            $table->string('nama_req');
            $table->string('merek_req');
            $table->string('type_req');
            $table->string('sn_req');
            $table->string('lokasi_req');
            $table->string('kerusakan_req');
            $table->string('pelapor_req');
            $table->string('tanggal_req');
            $table->string('kode_rs');
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
        Schema::dropIfExists('pesanans');
    }
};
