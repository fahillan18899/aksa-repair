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
        Schema::create('lembar_pemeliharaans', function (Blueprint $table) {
            $table->integer('id_ppm')->unsigned()->nullable();
            $table->date('tanggal')->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('engineer')->nullable();
            $table->string('id_aset')->nullable();
            $table->string('nama_alat')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('merek')->nullable();
            $table->string('instalasi')->nullable();
            $table->string('tipe')->nullable();
            $table->string('ruangan')->nullable();
            $table->string('hand_hygiene')->nullable();
            $table->string('menyiapkan_alat_dan_bahan')->nullable();
            $table->string('alat_pelindung_diri')->nullable();
            $table->string('mengoprasikan_alat_kalibrasi')->nullable();
            $table->string('ktd')->nullable();
            $table->string('mengoprasikan_alat')->nullable();
            $table->string('identifikasi_bahaya')->nullable();
            $table->string('badan_selungkup1')->nullable();
            $table->string('badan_selungkup2')->nullable();
            $table->string('alat_sistem_interlock1')->nullable();
            $table->string('alat_sistem_interlock2')->nullable();
            $table->string('kabel_kelenturan1')->nullable();
            $table->string('kabel_kelenturan2')->nullable();
            $table->string('sistem_pengunci1')->nullable();
            $table->string('sistem_pengunci2')->nullable();
            $table->string('tombol_saklar1')->nullable();
            $table->string('tombol_saklar2')->nullable();
            $table->string('label_penandaan1')->nullable();
            $table->string('label_penandaan2')->nullable();
            $table->string('display_layar1')->nullable();
            $table->string('display_layar2')->nullable();
            $table->string('aksesoris1')->nullable();
            $table->string('aksesoris2')->nullable();
            $table->string('indikator_bunyi1')->nullable();
            $table->string('indikator_bunyi2')->nullable();
            $table->string('pembersihan')->nullable();
            $table->string('pengencangan_bagian_alat')->nullable();
            $table->string('pelumasan')->nullable();
            $table->string('kalibrasi_berkala')->nullable();
            $table->string('penggantian_bahan_habis_pakai')->nullable();
            $table->string('cek_alat')->nullable();
            $table->string('nama_sukucadang')->nullable();
            $table->string('volume')->nullable();
            $table->string('harga_satuan')->nullable();
            $table->string('jumlah_harga')->nullable();
            $table->string('evaluasi')->nullable();
            $table->string('status')->nullable();
            $table->string('status1')->nullable();
            $table->string('mulai_bekerja')->nullable();
            $table->string('selesai_kerja')->nullable();
            $table->string('durasi')->nullable();
            $table->string('user')->nullable();
            $table->string('engginer')->nullable();
            $table->string('kode_rs')->nullable();          
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
