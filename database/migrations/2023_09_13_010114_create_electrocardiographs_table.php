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
        Schema::create('electrocardiographs', function (Blueprint $table) {
            /**Pelaksana Kalibrasi */
            $table->id()->primary();
            $table->string('nama_instansi')->nullable();
            $table->string('tempat_kalibrasi')->nullable();
            $table->date('tanggal')->nullable();
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
            /**Pengukuran kondisi lingkungan */
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
            /**Hasil pengukuran keselamatan listrik */
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
            /**Hasil Pengukuran Kinerja */
            //1 lead.
            $table->char('II')->nullable();
            $table->char('III')->nullable();
            $table->char('aVr')->nullable();
            $table->char('aVR')->nullable();
            $table->char('aVL')->nullable();
            $table->char('V2')->nullable();
            $table->char('V3')->nullable();
            $table->char('V4')->nullable();
            $table->char('V5')->nullable();
            $table->char('V6')->nullable();
            // 2. Hasil Pengukuran Kinerja ECG
            $table->float('setting_pada_standar_1')->nullable();
            $table->float('terukur_rata_rata_pada_standar_1')->nullable();
            $table->float('koreksi_1')->nullable();
            $table->float('kesalahan_aksimal_1')->nullable();
            $table->float('ketidakpastian_1')->nullable();
            $table->float('setting_pada_standar_2')->nullable();
            $table->float('terukur_rata_rata_pada_standar_2')->nullable();
            $table->float('koreksi_2')->nullable();
            $table->float('ketidakpastian_2')->nullable();
            $table->float('setting_pada_standar_3')->nullable();
            $table->float('terukur_rata_rata_pada_standar_3')->nullable();
            $table->float('koreksi_3')->nullable();
            $table->float('ketidakpastian_3')->nullable();
            $table->float('setting_pada_standar_4')->nullable();
            $table->float('terukur_rata_rata_pada_standar_4')->nullable();
            $table->float('koreksi_4')->nullable();
            $table->float('ketidakpastian_4')->nullable();
            $table->float('setting_pada_standar_5')->nullable();
            $table->float('terukur_rata_rata_pada_standar_5')->nullable();
            $table->float('koreksi_5')->nullable();
            $table->float('ketidakpastian_5')->nullable();
            $table->float('BPM_1')->nullable();
            $table->float('BPM_2')->nullable();
            $table->float('BPM_3')->nullable();
            $table->float('BPM_4')->nullable();
            $table->float('BPM_5')->nullable();
            $table->float('BPM_6')->nullable();
            $table->float('BPM_7')->nullable();
            $table->float('BPM_8')->nullable();
            $table->float('BPM_9')->nullable();
            $table->float('BPM_10')->nullable();
            $table->float('BPM_11')->nullable();
            $table->float('BPM_12')->nullable();
            $table->float('BPM_13')->nullable();
            $table->float('BPM_14')->nullable();
            $table->float('BPM_15')->nullable();
            $table->float('BPM_16')->nullable();
            $table->float('BPM_17')->nullable();
            $table->float('BPM_18')->nullable();
            $table->float('BPM_19')->nullable();
            $table->float('BPM_20')->nullable();
            $table->float('BPM_21')->nullable();
            $table->float('BPM_22')->nullable();


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
        Schema::dropIfExists('electrocardiographs');
    }
};
