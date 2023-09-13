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
        Schema::create('timbangan_bayis', function (Blueprint $table) {
            /**Data Pelanggan */
            $table->id()->primary();
            $table->string('nama_alat')->nullable();
            $table->string('milik')->nullable();
            $table->string('tipe')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('rentang_ukur')->nullable();
            $table->string('resolusi')->nullable();
            /**Pelaksana Kalibrasi */
            $table->string('nama_instansi')->nullable();
            $table->string('tempat_kalibrasi')->nullable();
            $table->date('tanggal1')->nullable();
            $table->date('tanggal2')->nullable();
            $table->string('nama_petugas')->nullable();
            /**Kondisi Ruangan */
            $table->string('suhu_1')->nullable();
            $table->string('suhu_2')->nullable();
            $table->string('kelembapan_1')->nullable();
            $table->string('kelembapan_2')->nullable();
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
            $table->string('merek_5')->nullable();
            $table->string('tipe_5')->nullable();
            $table->string('no_seri_5')->nullable();
            $table->string('tertelusur_5')->nullable();
            $table->string('merek_6')->nullable();
            $table->string('tipe_6')->nullable();
            $table->string('no_seri_6')->nullable();
            $table->string('tertelusur_6')->nullable();
            /**Pemeriksaan kondisi fisik dan fungsi */
            $table->string('hasil_pemeriksaan_fisik_1')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_1')->nullable();
            $table->string('keterangan_1')->nullable();
            $table->string('hasil_pemeriksaan_fisik_2')->nullable();
            $table->string('hasil_pemeriksaan_fungsi_2')->nullable();
            $table->string('keterangan_2')->nullable();
            /**Hasil Pengukuran Kinerja alat  */
                //1.Daya ulang pembacaan
                $table->float('beban_load1')->nullable();
                $table->float('standar_devisia1')->nullable();
                $table->float('beban_load2')->nullable();
                $table->float('standar_devisia2')->nullable();
                //Penyimpangan Penunjukan
                $table->float('nilai_referensi1')->nullable();
                $table->float('pembacaan_timbangan1')->nullable();
                $table->float('koreksi1')->nullable();
                $table->float('ketidakpastian1')->nullable();
                $table->float('nilai_referensi2')->nullable();
                $table->float('pembacaan_timbangan2')->nullable();
                $table->float('koreksi2')->nullable();
                $table->float('ketidakpastian2')->nullable();
                $table->float('nilai_referensi3')->nullable();
                $table->float('pembacaan_timbangan3')->nullable();
                $table->float('koreksi3')->nullable();
                $table->float('ketidakpastian3')->nullable();
                $table->float('nilai_referensi4')->nullable();
                $table->float('pembacaan_timbangan4')->nullable();
                $table->float('koreksi4')->nullable();
                $table->float('ketidakpastian4')->nullable();
                $table->float('nilai_referensi5')->nullable();
                $table->float('pembacaan_timbangan5')->nullable();
                $table->float('koreksi5')->nullable();
                $table->float('ketidakpastian5')->nullable();
                $table->float('nilai_referensi6')->nullable();
                $table->float('pembacaan_timbangan6')->nullable();
                $table->float('koreksi6')->nullable();
                $table->float('ketidakpastian6')->nullable();
                $table->float('nilai_referensi7')->nullable();
                $table->float('pembacaan_timbangan7')->nullable();
                $table->float('koreksi7')->nullable();
                $table->float('ketidakpastian7')->nullable();
                $table->float('nilai_referensi8')->nullable();
                $table->float('pembacaan_timbangan8')->nullable();
                $table->float('koreksi8')->nullable();
                $table->float('ketidakpastian8')->nullable();
                $table->float('nilai_referensi9')->nullable();
                $table->float('pembacaan_timbangan9')->nullable();
                $table->float('koreksi9')->nullable();
                $table->float('ketidakpastian9')->nullable();
                $table->float('nilai_referensi10')->nullable();
                $table->float('pembacaan_timbangan10')->nullable();
                $table->float('koreksi10')->nullable();
                $table->float('ketidakpastian10')->nullable();
                $table->float('nilai_referensi11')->nullable();
                $table->float('pembacaan_timbangan11')->nullable();
                $table->float('koreksi11')->nullable();
                $table->float('ketidakpastian11')->nullable();

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
        Schema::dropIfExists('timbangan_bayis');
    }
};
