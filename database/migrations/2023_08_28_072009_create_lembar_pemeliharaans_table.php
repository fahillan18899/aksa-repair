<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lembar_pemeliharaans', function (Blueprint $table) {
            $table->increments('id_ppm');
            $table->date('tanggal', 5)->nullable();
            $table->string('kegiatan', 50)->nullable();
            $table->string('engineer', 50)->nullable();
            $table->string('id_aset', 40)->nullable();
            $table->string('qr_code', 100)->nullable();
            $table->string('nama_alat', 50)->nullable();
            $table->string('serial_number', 50)->nullable();
            $table->string('merek', 50)->nullable();
            $table->string('instalasi', 50)->nullable();
            $table->string('tipe', 50)->nullable();
            $table->string('ruangan', 50)->nullable();
            $table->string('hand_hygiene', 5)->nullable();
            $table->string('menyiapkan_alat_dan_bahan', 5)->nullable();
            $table->string('alat_pelindung_diri', 5)->nullable();
            $table->string('mengoprasikan_alat_kalibrasi', 5)->nullable();
            $table->string('ktd', 5)->nullable();
            $table->string('mengoprasikan_alat', 5)->nullable();
            $table->string('identifikasi_bahaya', 5)->nullable();
            $table->string('badan_selungkup1', 7)->nullable();
            $table->text('catatan1')->nullable();
            $table->string('badan_selungkup2', 7)->nullable();
            $table->text('catatan2')->nullable();
            $table->string('alat_sistem_interlock1', 7)->nullable();
            $table->text('catatan3')->nullable();
            $table->string('alat_sistem_interlock2', 7)->nullable();
            $table->text('catatan4')->nullable();
            $table->string('kabel_kelenturan1', 7)->nullable();
            $table->text('catatan5')->nullable();
            $table->string('kabel_kelenturan2', 7)->nullable();
            $table->text('catatan6')->nullable();
            $table->string('sistem_pengunci1', 7)->nullable();
            $table->text('catatan7')->nullable();
            $table->string('sistem_pengunci2', 7)->nullable();
            $table->text('catatan8')->nullable();
            $table->string('tombol_saklar1', 7)->nullable();
            $table->text('catatan9')->nullable();
            $table->string('tombol_saklar2', 7)->nullable();
            $table->text('catatan10')->nullable();
            $table->string('label_penandaan1', 7)->nullable();
            $table->text('catatan11')->nullable();
            $table->string('label_penandaan2', 7)->nullable();
            $table->text('catatan12')->nullable();
            $table->string('display_layar1', 7)->nullable();
            $table->text('catatan13')->nullable();
            $table->string('display_layar2', 7)->nullable();
            $table->text('catatan14')->nullable();
            $table->string('aksesoris1', 7)->nullable();
            $table->text('catatan15')->nullable();
            $table->string('aksesoris2', 7)->nullable();
            $table->text('catatan16')->nullable();
            $table->string('indikator_bunyi1', 7)->nullable();
            $table->text('catatan17')->nullable();
            $table->string('indikator_bunyi2', 7)->nullable();
            $table->text('catatan18')->nullable();
            $table->string('pembersihan', 5)->nullable();
            $table->string('pengencangan_bagian_alat', 5)->nullable();
            $table->string('pelumasan', 5)->nullable();
            $table->string('kalibrasi_berkala', 5)->nullable();
            $table->string('penggantian_bahan_habis_pakai', 5)->nullable();
            $table->string('cek_alat', 20)->nullable();
            $table->string('nama_sukucadang', 20)->nullable();
            $table->string('volume', 8)->nullable();
            $table->string('harga_satuan', 8)->nullable();
            $table->string('jumlah_harga', 8)->nullable();
            $table->string('evaluasi', 20)->nullable();
            $table->string('status', 30)->nullable();
            $table->string('status1', 20)->nullable();
            $table->string('mulai_bekerja', 20)->nullable();
            $table->string('selesai_kerja', 20)->nullable();
            $table->string('durasi', 10)->nullable();
            $table->string('tanggal_selesai')->nullable();
            $table->string('user', 10)->nullable();
            $table->string('engginer', 50)->nullable();
            $table->string('kode_rs', 10)->index()->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemeliharaan_alats');
    }
};
