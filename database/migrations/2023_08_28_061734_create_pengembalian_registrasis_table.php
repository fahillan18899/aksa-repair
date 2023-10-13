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
            $table->string('id_perbaikan_reg')->primary();
            $table->string('id_aset_reg')->nullable();
            $table->string('nama_alat_reg')->nullable();
            $table->date('tanggal_perbaikan_reg')->nullable();
            $table->string('merek_reg')->nullable();
            $table->string('tipe_reg')->nullable();
            $table->date('tanggal_pengembalian_reg')->nullable();
            $table->string('serial_number_reg')->nullable();
            $table->string('pelapor_reg')->nullable();
            $table->string('lokasi_alat_reg')->nullable();
            $table->string('keterangan_reg')->nullable();
            $table->string('penerima_reg')->nullable();
            $table->string('harga_perbaikan_reg')->nullable();
            $table->string('teknisi1_reg')->nullable();
            $table->string('teknisi2_reg')->nullable();
            $table->string('teknisi3_reg')->nullable();
            $table->string('suku_cadang')->nullable();
            $table->string('volume')->nullable();
            $table->string('harga_satuan')->nullable();
            $table->string('jumlah_harga')->nullable();
            $table->string('ka_instalasi_reg')->nullable();
            $table->string('penyebab_kerusakan_reg')->nullable();
            $table->string('solusi_perbaikan_reg')->nullable();
            $table->string('penguji_suku_cadang_reg')->nullable();
            $table->string('hasil_verifikasi_reg')->nullable();
            $table->string('hasil_fungsi_reg')->nullable();
            $table->string('pengganti_suku_cadang_reg')->nullable();
            $table->string('kode_rs', 10)->nullable();
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
        Schema::dropIfExists('pengembalian_registrasis');
    }
};
