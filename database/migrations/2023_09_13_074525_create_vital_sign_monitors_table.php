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
        Schema::create('vital_sign_monitors', function (Blueprint $table) {
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
            //1.SPO2
            $table->string('saturasi_oksigen98_1')->nullable();
            $table->string('saturasi_oksigen98_2')->nullable();
            $table->string('saturasi_oksigen98_3')->nullable();
            $table->string('saturasi_oksigen93_1')->nullable();
            $table->string('saturasi_oksigen93_2')->nullable();
            $table->string('saturasi_oksigen93_3')->nullable();
            $table->string('saturasi_oksigen92_1')->nullable();
            $table->string('saturasi_oksigen92_2')->nullable();
            $table->string('saturasi_oksigen92_3')->nullable();
            $table->string('saturasi_oksigen85_1')->nullable();
            $table->string('saturasi_oksigen85_2')->nullable();
            $table->string('saturasi_oksigen85_3')->nullable();
            $table->string('saturasi_oksigen30_1')->nullable();
            $table->string('saturasi_oksigen30_2')->nullable();
            $table->string('saturasi_oksigen30_3')->nullable();
            $table->string('saturasi_oksigen90_1')->nullable();
            $table->string('saturasi_oksigen90_2')->nullable();
            $table->string('saturasi_oksigen90_3')->nullable();
            $table->string('saturasi_oksigen70_1')->nullable();
            $table->string('saturasi_oksigen70_2')->nullable();
            $table->string('saturasi_oksigen70_3')->nullable();
            $table->string('saturasi_oksigen88_1')->nullable();
            $table->string('saturasi_oksigen88_2')->nullable();
            $table->string('saturasi_oksigen88_3')->nullable();
            $table->string('saturasi_oksigen90_1')->nullable();
            $table->string('saturasi_oksigen90_2')->nullable();
            $table->string('saturasi_oksigen90_3')->nullable();
            //BRPM
            $table->string('respirasi30_1')->nullable();
            $table->string('respirasi30_2')->nullable();
            $table->string('respirasi30_3')->nullable();
            $table->string('respirasi60_1')->nullable();
            $table->string('respirasi60_2')->nullable();
            $table->string('respirasi60_3')->nullable();
            $table->string('respirasi80_1')->nullable();
            $table->string('respirasi80_2')->nullable();
            $table->string('respirasi80_3')->nullable();
            $table->string('respirasi120_1')->nullable();
            $table->string('respirasi120_2')->nullable();
            $table->string('respirasi120_3')->nullable();
            $table->string('respirasi180_1')->nullable();
            $table->string('respirasi180_2')->nullable();
            $table->string('respirasi180_3')->nullable();
            $table->string('respirasi240_1')->nullable();
            $table->string('respirasi240_2')->nullable();
            $table->string('respirasi240_3')->nullable();
            //HEART RATE
            $table->string('heart_rate30_1')->nullable();
            $table->string('heart_rate30_2')->nullable();
            $table->string('heart_rate30_3')->nullable();
            $table->string('heart_rate60_1')->nullable();
            $table->string('heart_rate60_2')->nullable();
            $table->string('heart_rate60_3')->nullable();
            $table->string('heart_rate120_1')->nullable();
            $table->string('heart_rate120_2')->nullable();
            $table->string('heart_rate120_3')->nullable();
            $table->string('heart_rate180_1')->nullable();
            $table->string('heart_rate180_2')->nullable();
            $table->string('heart_rate180_3')->nullable();
            $table->string('heart_rate240_1')->nullable();
            $table->string('heart_rate240_2')->nullable();
            $table->string('heart_rate240_3')->nullable();
            //-//
            $table->string('systole120_1')->nullable();
            $table->string('systole120_2')->nullable();
            $table->string('systole120_3')->nullable();
            $table->string('mean93_1')->nullable();
            $table->string('mean93_2')->nullable();
            $table->string('mean93_3')->nullable();
            $table->string('diastole80_1')->nullable();
            $table->string('diastole80_2')->nullable();
            $table->string('diastole80_3')->nullable();
            //
            $table->string('systole150_1')->nullable();
            $table->string('systole150_2')->nullable();
            $table->string('systole150_3')->nullable();
            $table->string('mean116_1')->nullable();
            $table->string('mean116_2')->nullable();
            $table->string('mean116_3')->nullable();
            $table->string('diastole100_1')->nullable();
            $table->string('diastole100_2')->nullable();
            $table->string('diastole100_3')->nullable();
            //
            $table->string('systole200_1')->nullable();
            $table->string('systole200_2')->nullable();
            $table->string('systole200_3')->nullable();
            $table->string('mean166_1')->nullable();
            $table->string('mean166_2')->nullable();
            $table->string('mean166_3')->nullable();
            $table->string('diastole150_1')->nullable();
            $table->string('diastole150_2')->nullable();
            $table->string('diastole150_3')->nullable();
            //
            $table->string('systole255_1')->nullable();
            $table->string('systole255_2')->nullable();
            $table->string('systole255_3')->nullable();
            $table->string('mean215_1')->nullable();
            $table->string('mean215_2')->nullable();
            $table->string('mean215_3')->nullable();
            $table->string('diastole195_1')->nullable();
            $table->string('diastole195_2')->nullable();
            $table->string('diastole195_3')->nullable();
            //
            $table->string('systole60_1')->nullable();
            $table->string('systole60_2')->nullable();
            $table->string('systole60_3')->nullable();
            $table->string('mean40_1')->nullable();
            $table->string('mean40_2')->nullable();
            $table->string('mean40_3')->nullable();
            $table->string('diastole30_1')->nullable();
            $table->string('diastole30_2')->nullable();
            $table->string('diastole30_3')->nullable();
            //
            $table->string('systole80_1')->nullable();
            $table->string('systole80_2')->nullable();
            $table->string('systole80_3')->nullable();
            $table->string('mean60_1')->nullable();
            $table->string('mean60_2')->nullable();
            $table->string('mean60_3')->nullable();
            $table->string('diastole50_1')->nullable();
            $table->string('diastole50_2')->nullable();
            $table->string('diastole50_3')->nullable();
            //
            $table->string('systole100_1')->nullable();
            $table->string('systole100_2')->nullable();
            $table->string('systole100_3')->nullable();
            $table->string('mean76_1')->nullable();
            $table->string('mean76_2')->nullable();
            $table->string('mean76_3')->nullable();
            $table->string('diastole65_1')->nullable();
            $table->string('diastole65_2')->nullable();
            $table->string('diastole65_3')->nullable();


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
        Schema::dropIfExists('vital_sign_monitors');
    }
};
