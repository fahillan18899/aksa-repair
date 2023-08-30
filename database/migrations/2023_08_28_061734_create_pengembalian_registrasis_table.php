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
        Schema::create('pengembalian_registrasis', function (Blueprint $table) {
            $table->string('id_aset_reg')->primary();
            $table->string('nama_alat_reg');
            $table->date('tanggal_perbaikan_reg');
            $table->string('merek_reg');
            $table->string('id_perbaikan_reg');
            $table->string('tipe_reg');
            $table->date('tanggal_pengembalian_reg');
            $table->string('serial_number_reg');
            $table->string('pelapor_reg');
            $table->string('lokasi_alat_reg');
            $table->string('keterangan_reg');
            $table->string('penerima_reg');
            $table->string('harga_perbaikan_reg');
            $table->string('teknisi1_reg');
            $table->string('teknisi2_reg');
            $table->string('ka_instalasi_reg');
            $table->string('penyebab_kerusakan_reg');
            $table->string('solusi_perbaikan_reg');
            $table->string('penguji_suku_cadang_reg');
            $table->string('hasil_verifikasi_reg');
            $table->string('hasil_fungsi_reg');
            $table->string('pengganti_suku_cadang_reg');
            $table->string('kode_rs');
            $table->integer('active')->nullable()->change();         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian_registrasis');
    }
};
