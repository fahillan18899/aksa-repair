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
            $table->string('milik', 20)->nullable();
            $table->string('merek', 15)->nullable();
            $table->string('tipe', 15)->nullable();
            $table->string('resolusi', 15)->nullable();
            $table->string('no_seri', 15)->nullable();
            $table->string('rentang_ukur', 15)->nullable();

            $table->string('nama_instansi', 20)->nullable();
            $table->string('ruangan_kalibrasi', 20)->nullable();
            $table->string('tanggal_diterima', 20)->nullable();
            $table->string('tanggal_kalibrasi', 20)->nullable();
            $table->string('nama_petugas', 20)->nullable();
            $table->string('no_label', 20)->nullable();

            $table->string('alat_1', 20)->nullable();
            $table->string('alat_2', 20)->nullable();
            $table->string('alat_3', 20)->nullable();
            $table->string('alat_4', 20)->nullable();
            $table->string('alat_5', 20)->nullable();
            $table->string('alat_6', 20)->nullable();
            $table->string('alat_7', 20)->nullable();
            $table->string('alat_8', 20)->nullable();
            $table->string('alat_9', 20)->nullable();
            $table->string('alat_10', 20)->nullable();
            $table->string('alat_11', 20)->nullable();
            $table->string('alat_12', 20)->nullable();
            $table->string('merek_1', 20)->nullable();
            $table->string('merek_2', 20)->nullable();
            $table->string('merek_3', 20)->nullable();
            $table->string('merek_4', 20)->nullable();
            $table->string('merek_5', 20)->nullable();
            $table->string('merek_6', 20)->nullable();
            $table->string('merek_7', 20)->nullable();
            $table->string('merek_8', 20)->nullable();
            $table->string('merek_9', 20)->nullable();
            $table->string('merek_10', 20)->nullable();
            $table->string('merek_11', 20)->nullable();
            $table->string('merek_12', 20)->nullable();
            $table->string('tipe_1', 10)->nullable();
            $table->string('tipe_2', 10)->nullable();
            $table->string('tipe_3', 10)->nullable();
            $table->string('tipe_4', 10)->nullable();
            $table->string('tipe_5', 10)->nullable();
            $table->string('tipe_6', 10)->nullable();
            $table->string('tipe_7', 10)->nullable();
            $table->string('tipe_8', 10)->nullable();
            $table->string('tipe_9', 10)->nullable();
            $table->string('tipe_10', 10)->nullable();
            $table->string('tipe_11', 10)->nullable();
            $table->string('tipe_12', 10)->nullable();
            $table->string('no_seri_1', 10)->nullable();
            $table->string('no_seri_2', 10)->nullable();
            $table->string('no_seri_3', 10)->nullable();
            $table->string('no_seri_4', 10)->nullable();
            $table->string('no_seri_5', 10)->nullable();
            $table->string('no_seri_6', 10)->nullable();
            $table->string('no_seri_7', 10)->nullable();
            $table->string('no_seri_8', 10)->nullable();
            $table->string('no_seri_9', 10)->nullable();
            $table->string('no_seri_10', 10)->nullable();
            $table->string('no_seri_11', 10)->nullable();
            $table->string('no_seri_12', 10)->nullable();
            $table->string('tertelusur_1', 10)->nullable();
            $table->string('tertelusur_2', 10)->nullable();
            $table->string('tertelusur_3', 10)->nullable();
            $table->string('tertelusur_4', 10)->nullable();
            $table->string('tertelusur_5', 10)->nullable();
            $table->string('tertelusur_6', 10)->nullable();
            $table->string('tertelusur_7', 10)->nullable();
            $table->string('tertelusur_8', 10)->nullable();
            $table->string('tertelusur_9', 10)->nullable();
            $table->string('tertelusur_10', 10)->nullable();
            $table->string('tertelusur_11', 10)->nullable();
            $table->string('tertelusur_12', 10)->nullable();

            $table->string('suhu_sebelum', 20)->nullable();
            $table->string('kelembapan_sebelum', 20)->nullable();
            $table->string('suhu_sesudah', 20)->nullable();
            $table->string('kelembapan_sesudah', 20)->nullable();
            $table->string('rata_rata_suhu', 20)->nullable();
            $table->string('rata_rata_kelembapan', 20)->nullable();

            $table->string('bagian_alat_1', 20)->nullable();
            $table->string('bagian_alat_2', 20)->nullable();
            $table->string('bagian_alat_3', 20)->nullable();
            $table->string('bagian_alat_4', 20)->nullable();
            $table->string('bagian_alat_5', 20)->nullable();
            $table->string('bagian_alat_6', 20)->nullable();
            $table->string('bagian_alat_7', 20)->nullable();
            $table->string('bagian_alat_8', 20)->nullable();
            $table->string('bagian_alat_9', 20)->nullable();
            $table->string('bagian_alat_10', 20)->nullable();
            $table->string('bagian_alat_11', 20)->nullable();
            $table->string('bagian_alat_12', 20)->nullable();
            $table->string('hasil_fisik_1', 10)->nullable();
            $table->string('hasil_fisik_2', 10)->nullable();
            $table->string('hasil_fisik_3', 10)->nullable();
            $table->string('hasil_fisik_4', 10)->nullable();
            $table->string('hasil_fisik_5', 10)->nullable();
            $table->string('hasil_fisik_6', 10)->nullable();
            $table->string('hasil_fisik_7', 10)->nullable();
            $table->string('hasil_fisik_8', 10)->nullable();
            $table->string('hasil_fisik_9', 10)->nullable();
            $table->string('hasil_fisik_10', 10)->nullable();
            $table->string('hasil_fisik_11', 10)->nullable();
            $table->string('hasil_fisik_12', 10)->nullable();
            $table->string('hasil_fungsi_1', 10)->nullable();
            $table->string('hasil_fungsi_2', 10)->nullable();
            $table->string('hasil_fungsi_3', 10)->nullable();
            $table->string('hasil_fungsi_4', 10)->nullable();
            $table->string('hasil_fungsi_5', 10)->nullable();
            $table->string('hasil_fungsi_6', 10)->nullable();
            $table->string('hasil_fungsi_7', 10)->nullable();
            $table->string('hasil_fungsi_8', 10)->nullable();
            $table->string('hasil_fungsi_9', 10)->nullable();
            $table->string('hasil_fungsi_10', 10)->nullable();
            $table->string('hasil_fungsi_11', 10)->nullable();
            $table->string('hasil_fungsi_12', 10)->nullable();
            $table->string('keterangan_1', 10)->nullable();
            $table->string('keterangan_2', 10)->nullable();
            $table->string('keterangan_3', 10)->nullable();
            $table->string('keterangan_4', 10)->nullable();
            $table->string('keterangan_5', 10)->nullable();
            $table->string('keterangan_6', 10)->nullable();
            $table->string('keterangan_7', 10)->nullable();
            $table->string('keterangan_8', 10)->nullable();
            $table->string('keterangan_9', 10)->nullable();
            $table->string('keterangan_10', 10)->nullable();
            $table->string('keterangan_11', 10)->nullable();
            $table->string('keterangan_12', 10)->nullable();

            $table->string('pengukuran_listrik_1', 20)->nullable();
            $table->string('pengukuran_listrik_2', 20)->nullable();
            $table->string('pengukuran_listrik_3', 20)->nullable();
            $table->string('pengukuran_listrik_4', 20)->nullable();
            $table->string('pengukuran_listrik_5', 20)->nullable();
            $table->string('kode_rs', 8)->nullable();

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
