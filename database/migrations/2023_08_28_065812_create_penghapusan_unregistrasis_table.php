<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('penghapusan_unregistrasis', function (Blueprint $table) {
            $table->string('id_perbaikan_un');
            $table->date('tanggal_perbaikan_un');
            $table->string('nama_alat_un');
            $table->string('merek_alat_un');
            $table->string('type_alat_un');
            $table->string('serial_number_un');
            $table->string('lokasi_alat_un');
            $table->string('pelapor_un');
            $table->string('suku_cadang_un')->nullable();
            $table->string('volume_un')->nullable();
            $table->string('harga_satuan_un')->nullable();
            $table->string('jumlah_harga_un')->nullable();
            $table->string('teknisi_1_un');
            $table->string('teknisi_2_un')->nullable();
            $table->string('teknisi_3_un')->nullable();
            $table->string('tanggal_penggudangan_un');
            $table->string('ka_instalasi_un');
            $table->string('keterangan_penggudangan_un');
            $table->string('kode_rs', 10)->index();
            $table->integer('active')->default(1);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penghapusan_unregistrasis');
    }
};
