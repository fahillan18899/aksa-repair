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
        Schema::create('defibrilators', function (Blueprint $table) {
            /**Data alat pelanggan */
            $table->id()->primary();
            $table->string('nama_alat')->nullable();
            $table->string('milik')->nullable();
            $table->string('tipe')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('rentang_ukur')->nullable();
            $table->string('resolusi')->nullable();
            /**Pelaksana Kalirasi */
            $table->string('tempat_kalibrasi')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('nama_petugas')->nullable();
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
            /**Pengukuran kondisi ruangan */
            $table->string('suhu_1')->nullable();
            $table->string('suhu_2')->nullable();
            $table->string('kelembapan_1')->nullable();
            $table->string('kelembapan_2')->nullable();
            /**Hasil Pemeriksaan kondisi fisik dan fungsi */
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
            $table->string('hasil_pemeriksaan_fisik_7')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_7')->nullable();
            $table->string('keterangan_7')->nullable();
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
            /**Hasil pengukuran kinerja alat */
            $table->string('energi10_1')->nullable();
            $table->string('energi10_2')->nullable();
            $table->string('energi10_3')->nullable();
            $table->string('energi20_1')->nullable();
            $table->string('energi20_2')->nullable();
            $table->string('energi20_3')->nullable();
            $table->string('energi30_1')->nullable();
            $table->string('energi30_2')->nullable();
            $table->string('energi30_3')->nullable();
            $table->string('energi50_1')->nullable();
            $table->string('energi50_2')->nullable();
            $table->string('energi50_3')->nullable();
            $table->string('energi100_1')->nullable();
            $table->string('energi100_2')->nullable();
            $table->string('energi100_3')->nullable();
            $table->string('energi150_1')->nullable();
            $table->string('energi150_2')->nullable();
            $table->string('energi150_3')->nullable();
            $table->string('energi200_1')->nullable();
            $table->string('energi200_2')->nullable();
            $table->string('energi200_3')->nullable();
            $table->string('energi300_1')->nullable();
            $table->string('energi300_2')->nullable();
            $table->string('energi300_3')->nullable();
            //energi joule
            $table->string('energi300j_1')->nullable();
            $table->string('energi300j_2')->nullable();
            $table->string('energi300j_3')->nullable();
            //300
            $table->string('300_1')->nullable();
            $table->string('300_2')->nullable();


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
        Schema::dropIfExists('defibrilators');
    }
};
