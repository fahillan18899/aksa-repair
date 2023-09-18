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
            $table->increments('id');
            $table->string('milik')->nullable();
            $table->string('merek')->nullable();
            $table->string('tipe')->nullable();
            $table->string('resolusi')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('rentang_ukur')->nullable();

            $table->string('nama_instansi')->nullable();
            $table->string('ruangan_kalibrasi')->nullable();
            $table->string('tanggal_diterima')->nullable();
            $table->string('tanggal_kalibrasi')->nullable();
            $table->string('nama_petugas')->nullable();
            $table->string('no_label')->nullable();

            $table->string('alat_1')->nullable();
            $table->string('alat_2')->nullable();
            $table->string('alat_3')->nullable();
            $table->string('alat_4')->nullable();
            $table->string('alat_5')->nullable();
            $table->string('alat_6')->nullable();
            $table->string('alat_7')->nullable();
            $table->string('alat_8')->nullable();
            $table->string('alat_9')->nullable();
            $table->string('alat_10')->nullable();
            $table->string('alat_11')->nullable();
            $table->string('alat_12')->nullable();
            $table->string('merek_1')->nullable();
            $table->string('merek_2')->nullable();
            $table->string('merek_3')->nullable();
            $table->string('merek_4')->nullable();
            $table->string('merek_5')->nullable();
            $table->string('merek_6')->nullable();
            $table->string('merek_7')->nullable();
            $table->string('merek_8')->nullable();
            $table->string('merek_9')->nullable();
            $table->string('merek_10')->nullable();
            $table->string('merek_11')->nullable();
            $table->string('merek_12')->nullable();
            $table->string('tipe_1')->nullable();
            $table->string('tipe_2')->nullable();
            $table->string('tipe_3')->nullable();
            $table->string('tipe_4')->nullable();
            $table->string('tipe_5')->nullable();
            $table->string('tipe_6')->nullable();
            $table->string('tipe_7')->nullable();
            $table->string('tipe_8')->nullable();
            $table->string('tipe_9')->nullable();
            $table->string('tipe_10')->nullable();
            $table->string('tipe_11')->nullable();
            $table->string('tipe_12')->nullable();
            $table->string('no_seri_1')->nullable();
            $table->string('no_seri_2')->nullable();
            $table->string('no_seri_3')->nullable();
            $table->string('no_seri_4')->nullable();
            $table->string('no_seri_5')->nullable();
            $table->string('no_seri_6')->nullable();
            $table->string('no_seri_7')->nullable();
            $table->string('no_seri_8')->nullable();
            $table->string('no_seri_9')->nullable();
            $table->string('no_seri_10')->nullable();
            $table->string('no_seri_11')->nullable();
            $table->string('no_seri_12')->nullable();
            $table->string('tertelusur_1')->nullable();
            $table->string('tertelusur_2')->nullable();
            $table->string('tertelusur_3')->nullable();
            $table->string('tertelusur_4')->nullable();
            $table->string('tertelusur_5')->nullable();
            $table->string('tertelusur_6')->nullable();
            $table->string('tertelusur_7')->nullable();
            $table->string('tertelusur_8')->nullable();
            $table->string('tertelusur_9')->nullable();
            $table->string('tertelusur_10')->nullable();
            $table->string('tertelusur_11')->nullable();
            $table->string('tertelusur_12')->nullable();

            $table->string('suhu_sebelum')->nullable();
            $table->string('kelembapan_sebelum')->nullable();
            $table->string('suhu_sesudah')->nullable();
            $table->string('kelembapan_sesudah')->nullable();
            $table->string('rata_rata_suhu')->nullable();
            $table->string('rata_rata_kelembapan')->nullable();

            $table->string('bagian_alat_1')->nullable();
            $table->string('bagian_alat_2')->nullable();
            $table->string('bagian_alat_3')->nullable();
            $table->string('bagian_alat_4')->nullable();
            $table->string('bagian_alat_5')->nullable();
            $table->string('bagian_alat_6')->nullable();
            $table->string('bagian_alat_7')->nullable();
            $table->string('bagian_alat_8')->nullable();
            $table->string('bagian_alat_9')->nullable();
            $table->string('bagian_alat_10')->nullable();
            $table->string('bagian_alat_11')->nullable();
            $table->string('bagian_alat_12')->nullable();
            $table->string('hasil_fisik_1')->nullable();
            $table->string('hasil_fisik_2')->nullable();
            $table->string('hasil_fisik_3')->nullable();
            $table->string('hasil_fisik_4')->nullable();
            $table->string('hasil_fisik_5')->nullable();
            $table->string('hasil_fisik_6')->nullable();
            $table->string('hasil_fisik_7')->nullable();
            $table->string('hasil_fisik_8')->nullable();
            $table->string('hasil_fisik_9')->nullable();
            $table->string('hasil_fisik_10')->nullable();
            $table->string('hasil_fisik_11')->nullable();
            $table->string('hasil_fisik_12')->nullable();
            $table->string('hasil_fungsi_1')->nullable();
            $table->string('hasil_fungsi_2')->nullable();
            $table->string('hasil_fungsi_3')->nullable();
            $table->string('hasil_fungsi_4')->nullable();
            $table->string('hasil_fungsi_5')->nullable();
            $table->string('hasil_fungsi_6')->nullable();
            $table->string('hasil_fungsi_7')->nullable();
            $table->string('hasil_fungsi_8')->nullable();
            $table->string('hasil_fungsi_9')->nullable();
            $table->string('hasil_fungsi_10')->nullable();
            $table->string('hasil_fungsi_11')->nullable();
            $table->string('hasil_fungsi_12')->nullable();
            $table->string('keterangan_1')->nullable();
            $table->string('keterangan_2')->nullable();
            $table->string('keterangan_3')->nullable();
            $table->string('keterangan_4')->nullable();
            $table->string('keterangan_5')->nullable();
            $table->string('keterangan_6')->nullable();
            $table->string('keterangan_7')->nullable();
            $table->string('keterangan_8')->nullable();
            $table->string('keterangan_9')->nullable();
            $table->string('keterangan_10')->nullable();
            $table->string('keterangan_11')->nullable();
            $table->string('keterangan_12')->nullable();

            $table->string('pengukuran_listrik_1')->nullable();
            $table->string('pengukuran_listrik_2')->nullable();
            $table->string('pengukuran_listrik_3')->nullable();
            $table->string('pengukuran_listrik_4')->nullable();
            $table->string('pengukuran_listrik_5')->nullable();

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
