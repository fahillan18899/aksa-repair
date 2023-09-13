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
        Schema::create('uv_sterialsators', function (Blueprint $table) {
            /**Pelaksana Kalibrasi */
            $table->id()->primary();
            $table->string('nama_instansi')->nullable();
            $table->string('tempat_kalibrasi')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('nama_petugas')->nullable();
            $table->string('nama_petugas')->nullable();
            /**Data alat pelanggan */
            $table->string('nama_alat')->nullable();
            $table->string('milik')->nullable();
            $table->string('tipe')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('rentang_ukur')->nullable();
            $table->string('resolusi')->nullable();
            /**Alat yang digunakan */
            $table->string('merek_1')->nullable();
            $table->string('tipe_1')->nullable();
            $table->string('no_seri_1')->nullable();
            $table->string('tertelusur_1')->nullable();
            $table->string('merek_2')->nullable();
            $table->string('tipe_2')->nullable();
            $table->string('no_seri_2')->nullable();
            $table->string('tertelusur_2')->nullable();
            $table->string('merek_3')->nullable();
            $table->string('tipe_3')->nullable();
            $table->string('no_seri_3')->nullable();
            $table->string('tertelusur_3')->nullable();
            $table->string('merek_4')->nullable();
            $table->string('tipe_4')->nullable();
            $table->string('no_seri_4')->nullable();
            $table->string('tertelusur_4')->nullable();
            /**Pengukuran kondisi */
            $table->string('suhu_1')->nullable();
            $table->string('suhu_2')->nullable();
            $table->string('kelembapan_1')->nullable();
            $table->string('kelembapan_2')->nullable();
             /**Pemeriksaan kondisi fisik dan fungsi */
             $table->string('hasil_pemeriksaan_fisik_1')->nullable();
             $table->string('hasil_pemeriksaan_fungsi_1')->nullable();
             $table->string('keterangan_1')->nullable();
             $table->string('hasil_pemeriksaan_fisik_2')->nullable();
             $table->string('hasil_pemeriksaan_fungsi_2')->nullable();
             $table->string('keterangan_2')->nullable();
             $table->string('hasil_pemeriksaan_fisik_3')->nullable();
             $table->string('hasil_pemeriksaan_fungsi_3')->nullable();
             $table->string('keterangan_3')->nullable();
             $table->string('hasil_pemeriksaan_fisik_4')->nullable();
             $table->string('hasil_pemeriksaan_fungsi_4')->nullable();
             $table->string('keterangan_4')->nullable();
             $table->string('hasil_pemeriksaan_fisik_5')->nullable();
             $table->string('hasil_pemeriksaan_fungsi_5')->nullable();
             $table->string('keterangan_5')->nullable();
             $table->string('hasil_pemeriksaan_fisik_6')->nullable();
             $table->string('hasil_pemeriksaan_fungsi_6')->nullable();
             $table->string('keterangan_6')->nullable();
             /**Hasil Pengukuran keselamatan listrik */
            $table->string('hasil_pemeriksaan_fisik_1')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_1')->nullable();
            $table->string('hasil_pemeriksaan_fisik_2')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_2')->nullable();
            $table->string('hasil_pemeriksaan_fisik_3')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_3')->nullable();
            $table->string('hasil_pemeriksaan_fisik_4')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_4')->nullable();
            $table->string('hasil_pemeriksaan_fisik_5')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_5')->nullable();
            /**Pengukuran kinerja */
            //Irradiance pada jarak 200 cm
            $table->float('parameter_1')->nullable();
            $table->float('pembacaan_rata')->nullable();
            $table->float('presisi')->nullable();
            $table->float('toleransi')->nullable();
            //Waktu tunda
            $table->float('parameter_2')->nullable();
            $table->float('display_uut_2')->nullable();
            $table->float('terukur_rata')->nullable();
            $table->float('Koreksi_2')->nullable();
            $table->float('ketidakpastian_pengukuran_2')->nullable();

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
        Schema::dropIfExists('uv_sterialsators');
    }
};
