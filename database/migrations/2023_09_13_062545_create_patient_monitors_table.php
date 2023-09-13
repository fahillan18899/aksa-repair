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
        Schema::create('patient_monitors', function (Blueprint $table) {
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
            /**Pengukuran kinerja */
            //1 Irradiance pada jarak 200 cm
            $table->string('rata-rata_hasil_ukur_1')->nullable();
            $table->string('koreksi_1')->nullable();
            $table->string('ketidakpastian_1')->nullable();
            $table->string('rata-rata_hasil_ukur_2')->nullable();
            $table->string('koreksi_2')->nullable();
            $table->string('ketidakpastian_2')->nullable();
            $table->string('rata-rata_hasil_ukur_3')->nullable();
            $table->string('koreksi_3')->nullable();
            $table->string('ketidakpastian_3')->nullable();
            $table->string('rata-rata_hasil_ukur_4')->nullable();
            $table->string('koreksi_4')->nullable();
            $table->string('ketidakpastian_4')->nullable();
            $table->string('rata-rata_hasil_ukur_5')->nullable();
            $table->string('koreksi_5')->nullable();
            $table->string('ketidakpastian_5')->nullable();
            $table->string('rata-rata_hasil_ukur_6')->nullable();
            $table->string('koreksi_6')->nullable();
            $table->string('ketidakpastian_6')->nullable();
            $table->string('rata-rata_hasil_ukur_7')->nullable();
            $table->string('koreksi_7')->nullable();
            $table->string('ketidakpastian_7')->nullable();
            $table->string('rata-rata_hasil_ukur_8')->nullable();
            $table->string('koreksi_8')->nullable();
            $table->string('ketidakpastian_8')->nullable();
            $table->string('rata-rata_hasil_ukur_9')->nullable();
            $table->string('koreksi_9')->nullable();
            $table->string('ketidakpastian_9')->nullable();
            //brpm
            $table->string('rata-rata_hasil_ukur_brmp_1')->nullable();
            $table->string('koreksi_brmp_1')->nullable();
            $table->string('ketidakpastian_brmp_1')->nullable();
            $table->string('rata-rata_hasil_ukur_brmp_2')->nullable();
            $table->string('koreksi_brmp_2')->nullable();
            $table->string('ketidakpastian_brmp_2')->nullable();
            $table->string('rata-rata_hasil_ukur_brmp_3')->nullable();
            $table->string('koreksi_brmp_3')->nullable();
            $table->string('ketidakpastian_brmp_3')->nullable();
            $table->string('rata-rata_hasil_ukur_brmp_4')->nullable();
            $table->string('koreksi_brmp_4')->nullable();
            $table->string('ketidakpastian_brmp_4')->nullable();
            $table->string('rata-rata_hasil_ukur_brmp_5')->nullable();
            $table->string('koreksi_brmp_5')->nullable();
            $table->string('ketidakpastian_brmp_5')->nullable();
            $table->string('rata-rata_hasil_ukur_brmp_6')->nullable();
            $table->string('koreksi_brmp_6')->nullable();
            $table->string('ketidakpastian_brmp_6')->nullable();
            //heart rate
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
        Schema::dropIfExists('patient_monitors');
    }
};
