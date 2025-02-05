<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('penghapusan_registrasis', function (Blueprint $table) {
            $table->string('id_perbaikan_reg')->primary();
            $table->string('tanggal_perbaikan_reg');
            $table->date('tanggal_penggudangan_reg');
            $table->string('nama_alat_reg')->nullable();
            $table->string('merek_alat_reg')->nullable();
            $table->string('type_alat_reg')->nullable();
            $table->string('serial_number_reg')->nullable();
            $table->string('lokasi_alat_reg')->nullable();
            $table->string('pelapor_reg')->nullable();
            $table->string('teknisi_1_reg')->nullable();
            $table->string('teknisi_2_reg')->nullable();
            $table->string('teknisi_3_reg')->nullable();
            $table->string('teknisi_4_reg')->nullable();
            $table->string('teknisi_5_reg')->nullable();
            $table->string('suku_cadang')->nullable();
            $table->string('volume')->nullable();
            $table->string('harga_satuan')->nullable();
            $table->string('jumlah_harga')->nullable();
            $table->string('ka_instalasi_reg')->nullable();
            $table->string('keterangan_pengguna_reg')->nullable();
            $table->string('kode_rs', 10)->index();
            $table->integer('active')->default(1);

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('penghapusan_registrasis');
    }
};
