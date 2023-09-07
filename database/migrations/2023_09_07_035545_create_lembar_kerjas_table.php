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
        Schema::create('lembar_kerjas', function (Blueprint $table) {
            /**Pelaksanaan Kalibrasi */

            $table->increments('id');
            $table->string('nama_instansi')->nullable();
            $table->string('tempat_kalibrasi')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('nama_petugas')->nullable();
            $table->string('rentang_ukur')->nullable();
            $table->string('milik')->nullable();
            /**Pendataan Alat */
                /**Daftar alat yang digunakan */
                $table->date('merek_1')->nullable();
                $table->date('merek_2')->nullable();
                $table->date('merek_3')->nullable();
                $table->date('merek_4')->nullable();
                $table->date('tipe_1')->nullable();
                $table->date('tipe_2')->nullable();
                $table->date('tipe_3')->nullable();
                $table->date('tipe_4')->nullable();
                $table->date('no_seri_1')->nullable();
                $table->date('no_seri_2')->nullable();
                $table->date('no_seri_3')->nullable();
                $table->date('no_seri_4')->nullable();
                /**Data alat pelanggan */
                $table->string('nama_alat')->nullable();
                $table->string('tipe')->nullable();
                $table->string('no_seri')->nullable();
                $table->string('resolusi')->nullable();
            /**Pengukuran kondisi lingkungan */
            $table->string('suhu_1')->nullable();
            $table->string('suhu_2')->nullable();
            $table->string('kelembapan_1')->nullable();
            $table->string('kelembapan_2')->nullable();
            /**Pemeriksaan kondisi fisik dan fungsi alat pelanggan */
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
            $table->string('hasil_pemeriksaan_fisik_8')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_8')->nullable();
            $table->string('keterangan_8')->nullable();
            $table->string('hasil_pemeriksaan_fisik_9')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_9')->nullable();
            $table->string('keterangan_9')->nullable();
            $table->string('hasil_pemeriksaan_fisik_10')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_10')->nullable();
            $table->string('keterangan_10')->nullable();
            $table->string('hasil_pemeriksaan_fisik_11')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_11')->nullable();
            $table->string('keterangan_11')->nullable();
            $table->string('hasil_pemeriksaan_fisik_12')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_12')->nullable();
            $table->string('keterangan_12')->nullable();
            /**Pengukuran kinerja */
            $table->float('pengukuran_titik_50_1')->nullable();
            $table->float('pengukuran_titik_50_2')->nullable();
            $table->float('pengukuran_titik_50_3')->nullable();
            $table->float('pengukuran_titik_50_4')->nullable();
            $table->float('pengukuran_titik_50_5')->nullable();
            $table->float('pengukuran_titik_50_6')->nullable();
            $table->float('pengukuran_titik_100_1')->nullable();
            $table->float('pengukuran_titik_100_2')->nullable();
            $table->float('pengukuran_titik_100_3')->nullable();
            $table->float('pengukuran_titik_100_4')->nullable();
            $table->float('pengukuran_titik_100_5')->nullable();
            $table->float('pengukuran_titik_100_6')->nullable();
            $table->float('pengukuran_titik_150_1')->nullable();
            $table->float('pengukuran_titik_150_2')->nullable();
            $table->float('pengukuran_titik_150_3')->nullable();
            $table->float('pengukuran_titik_150_4')->nullable();
            $table->float('pengukuran_titik_150_5')->nullable();
            $table->float('pengukuran_titik_150_6')->nullable();
            $table->float('pengukuran_titik_200_1')->nullable();
            $table->float('pengukuran_titik_200_2')->nullable();
            $table->float('pengukuran_titik_200_3')->nullable();
            $table->float('pengukuran_titik_200_4')->nullable();
            $table->float('pengukuran_titik_200_5')->nullable();
            $table->float('pengukuran_titik_200_6')->nullable();
            $table->float('pengukuran_titik_250_1')->nullable();
            $table->float('pengukuran_titik_250_2')->nullable();
            $table->float('pengukuran_titik_250_3')->nullable();
            $table->float('pengukuran_titik_250_4')->nullable();
            $table->float('pengukuran_titik_250_5')->nullable();
            $table->float('pengukuran_titik_250_6')->nullable();
            /**Laju buang cepat */
            $table->float('pengukuran_setting_mmhg_1')->nullable();
            $table->float('pengukuran_setting_mmhg_2')->nullable();
            $table->float('pengukuran_setting_mmhg_3')->nullable();
            $table->float('pengukuran_setting_mmhg_4')->nullable();
            $table->float('pengukuran_setting_mmhg_5')->nullable();
            $table->float('pengukuran_setting_mmhg_6')->nullable();
            /**Akurasi Tekanan */
            $table->float('pembacaan_alat_naik_0_1')->nullable();
            $table->float('pembacaan_alat_naik_0_2')->nullable();
            $table->float('pembacaan_alat_naik_0_3')->nullable();
            $table->float('pembacaan_alat_naik_0_4')->nullable();
            $table->float('pembacaan_alat_naik_0_5')->nullable();
            $table->float('pembacaan_alat_naik_0_6')->nullable();
            $table->float('pembacaan_alat_naik_50_1')->nullable();
            $table->float('pembacaan_alat_naik_50_2')->nullable();
            $table->float('pembacaan_alat_naik_50_3')->nullable();
            $table->float('pembacaan_alat_naik_50_4')->nullable();
            $table->float('pembacaan_alat_naik_50_5')->nullable();
            $table->float('pembacaan_alat_naik_50_6')->nullable();
            $table->float('pembacaan_alat_naik_100_1')->nullable();
            $table->float('pembacaan_alat_naik_100_2')->nullable();
            $table->float('pembacaan_alat_naik_100_3')->nullable();
            $table->float('pembacaan_alat_naik_100_4')->nullable();
            $table->float('pembacaan_alat_naik_100_5')->nullable();
            $table->float('pembacaan_alat_naik_100_6')->nullable();
            $table->float('pembacaan_alat_naik_150_1')->nullable();
            $table->float('pembacaan_alat_naik_150_2')->nullable();
            $table->float('pembacaan_alat_naik_150_3')->nullable();
            $table->float('pembacaan_alat_naik_150_4')->nullable();
            $table->float('pembacaan_alat_naik_150_5')->nullable();
            $table->float('pembacaan_alat_naik_150_6')->nullable();
            $table->float('pembacaan_alat_naik_200_1')->nullable();
            $table->float('pembacaan_alat_naik_200_2')->nullable();
            $table->float('pembacaan_alat_naik_200_3')->nullable();
            $table->float('pembacaan_alat_naik_200_4')->nullable();
            $table->float('pembacaan_alat_naik_200_5')->nullable();
            $table->float('pembacaan_alat_naik_200_6')->nullable();
            $table->float('pembacaan_alat_naik_250_1')->nullable();
            $table->float('pembacaan_alat_naik_250_2')->nullable();
            $table->float('pembacaan_alat_naik_250_3')->nullable();
            $table->float('pembacaan_alat_naik_250_4')->nullable();
            $table->float('pembacaan_alat_naik_250_5')->nullable();
            $table->float('pembacaan_alat_naik_250_6')->nullable();
            

            $table->float('pembacaan_alat_turun_0_1')->nullable();
            $table->float('pembacaan_alat_turun_0_2')->nullable();
            $table->float('pembacaan_alat_turun_0_3')->nullable();
            $table->float('pembacaan_alat_turun_0_4')->nullable();
            $table->float('pembacaan_alat_turun_0_5')->nullable();
            $table->float('pembacaan_alat_turun_0_6')->nullable();
            $table->float('pembacaan_alat_turun_50_1')->nullable();
            $table->float('pembacaan_alat_turun_50_2')->nullable();
            $table->float('pembacaan_alat_turun_50_3')->nullable();
            $table->float('pembacaan_alat_turun_50_4')->nullable();
            $table->float('pembacaan_alat_turun_50_5')->nullable();
            $table->float('pembacaan_alat_turun_50_6')->nullable();
            $table->float('pembacaan_alat_turun_100_1')->nullable();
            $table->float('pembacaan_alat_turun_100_2')->nullable();
            $table->float('pembacaan_alat_turun_100_3')->nullable();
            $table->float('pembacaan_alat_turun_100_4')->nullable();
            $table->float('pembacaan_alat_turun_100_5')->nullable();
            $table->float('pembacaan_alat_turun_100_6')->nullable();
            $table->float('pembacaan_alat_turun_150_1')->nullable();
            $table->float('pembacaan_alat_turun_150_2')->nullable();
            $table->float('pembacaan_alat_turun_150_3')->nullable();
            $table->float('pembacaan_alat_turun_150_4')->nullable();
            $table->float('pembacaan_alat_turun_150_5')->nullable();
            $table->float('pembacaan_alat_turun_150_6')->nullable();
            $table->float('pembacaan_alat_turun_200_1')->nullable();
            $table->float('pembacaan_alat_turun_200_2')->nullable();
            $table->float('pembacaan_alat_turun_200_3')->nullable();
            $table->float('pembacaan_alat_turun_200_4')->nullable();
            $table->float('pembacaan_alat_turun_200_5')->nullable();
            $table->float('pembacaan_alat_turun_200_6')->nullable();
            $table->float('pembacaan_alat_turun_250_1')->nullable();
            $table->float('pembacaan_alat_turun_250_2')->nullable();
            $table->float('pembacaan_alat_turun_250_3')->nullable();
            $table->float('pembacaan_alat_turun_250_4')->nullable();
            $table->float('pembacaan_alat_turun_250_5')->nullable();
            $table->float('pembacaan_alat_turun_250_6')->nullable();

            $table->string('kode_rs')->nullable();
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
        Schema::dropIfExists('lembar_kerjas');
    }
};
