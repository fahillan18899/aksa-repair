<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lembar_pemeliharaans', function (Blueprint $table) {
            $table->increments('id_ppm');
            $table->date('tanggal', 5)->nullable();
            $table->string('kegiatan', 50)->nullable();
            $table->string('engineer', 50)->nullable();
            $table->string('id_aset', 40)->nullable();
            $table->string('nama_alat', 50)->nullable();
            $table->string('serial_number', 50)->nullable();
            $table->string('merek', 50)->nullable();
            $table->string('tipe', 50)->nullable();
            $table->string('ruangan', 50)->nullable();
            $table->text('persiapan')->nullable();
            $table->text('pemantauan')->nullable();
            $table->text('preverentif')->nullable();
            $table->string('cek_alat', 20)->nullable();
            $table->string('nama_sukucadang', 20)->nullable();
            $table->string('volume', 8)->nullable();
            $table->string('harga_satuan', 50)->nullable();
            $table->string('jumlah_harga', 50)->nullable();
            $table->string('evaluasi', 20)->nullable();
            $table->string('status', 30)->nullable();
            $table->string('status1', 20)->nullable();
            $table->string('mulai_bekerja', 20)->nullable();
            $table->string('selesai_kerja', 20)->nullable();
            $table->string('durasi', 100)->nullable();
            $table->string('tanggal_selesai')->nullable();
            $table->string('user', 10)->nullable();
            $table->string('engginer', 50)->nullable();
            $table->string('kode_rs', 10)->index()->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemeliharaan_alats');
    }
};
