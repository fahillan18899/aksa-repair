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
        Schema::create('pemeliharaan_alats', function (Blueprint $table) {
            $table->integer('id_ppm');
            $table->date('tanggal');            
            $table->string('kegiatan');            
            $table->string('engineer');            
            $table->string('id_aset');            
            $table->string('nama_alat');            
            $table->string('serial_number');            
            $table->string('merek');            
            $table->string('instalasi');            
            $table->string('tipe');            
            $table->string('ruangan');
            $table->string('hand_hygiene');            
            $table->string('menyiapkan_alat_dan_bahan');            
            $table->string('alat_pelindung_diri');
            $table->string('mengoprasikan_alat_kalibrasi');
            $table->string('ktd');
            $table->string('mengoprasikan_alat');
            $table->string('identifikasi_bahaya');
            $table->string('badan_selungkup1');
            $table->string('badan_selungkup2');
            $table->string('alat_sistem_interlock1');
            $table->string('alat_sistem_interlock2');            
            $table->string('kabel_kelenturan1');            
            $table->string('kabel_kelenturan2');
            $table->string('sistem_pengunci1');
            $table->string('sistem_pengunci2');
            $table->string('tombol_saklar1');
            $table->string('tombol_saklar2');
            $table->string('label_penandaan1');
            $table->string('label_penandaan2');
            $table->string('display_layar1');
            $table->string('display_layar2');            
            $table->string('aksesoris1');            
            $table->string('aksesoris2');
            $table->string('indikator_bunyi1');
            $table->string('indikator_bunyi2');
            $table->string('pembersihan');
            $table->string('pengencangan_bagian_alat');
            $table->string('pelumasan');
            $table->string('kalibrasi_berkala');
            $table->string('penggantian_bahan_habis_pakai');
            $table->string('cek_alat');            
            $table->string('nama_sukucadang');            
            $table->string('volume');
            $table->string('harga_satuan');
            $table->string('jumlah_harga');
            $table->string('evaluasi');
            $table->string('status');
            $table->string('status1');
            $table->string('mulai_bekerja');
            $table->string('selesai_kerja');
            $table->string('durasi');            
            $table->string('user');            
            $table->string('engginer');
            $table->string('kode_rs');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeliharaan_alats');
    }
};
