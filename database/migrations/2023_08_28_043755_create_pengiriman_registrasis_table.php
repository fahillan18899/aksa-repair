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
            $table->string('id_perbaikan_reg')->primary();
            $table->date('tanggal_perbaikan_reg');
            $table->date('tanggal_pengiriman_reg');
            $table->string('id_aset_reg');
            $table->string('nama_alat_reg');
            $table->string('merek_alat_reg');
            $table->string('type_alat_reg');
            $table->string('seri_number_reg');
            $table->string('lokasi_alat_reg');
            $table->string('teknisi_1_reg');
            $table->string('teknisi_2_reg');
            $table->string('teknisi_3_reg');
            $table->string('pelapor_reg');
            $table->string('keterangan_kondisi_alat_reg');
            $table->string('ka_instalasi_reg');
            $table->string('nama_rekan_reg');
            $table->string('alamat_rekan_reg');
            $table->string('teknisi_rekanan_reg');
            $table->string('telp_teknisi_rekanan_reg');
            $table->string('kode_rs');
            $table->integer('active')->nullable()->change();

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
        Schema::dropIfExists('pengiriman_registrasis');
    }
};
