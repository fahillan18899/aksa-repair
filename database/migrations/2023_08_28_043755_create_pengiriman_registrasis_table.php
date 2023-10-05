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
            $table->string('id_aset_reg')->nullable();
            $table->string('nama_alat_reg')->nullable();
            $table->string('merek_alat_reg')->nullable();
            $table->string('type_alat_reg')->nullable();
            $table->string('seri_number_reg')->nullable();
            $table->string('lokasi_alat_reg')->nullable();
            $table->string('teknisi_1_reg')->nullable();
            $table->string('teknisi_2_reg')->nullable();
            $table->string('teknisi_3_reg')->nullable();
            $table->string('pelapor_reg')->nullable();
            $table->string('keterangan_kondisi_alat_reg')->nullable();
            $table->string('ka_instalasi_reg')->nullable();
            $table->string('nama_rekan_reg')->nullable();
            $table->string('alamat_rekan_reg')->nullable();
            $table->string('teknisi_rekanan_reg')->nullable();
            $table->string('telp_teknisi_rekanan_reg')->nullable();
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
        Schema::dropIfExists('pengiriman_registrasis');
    }
};
