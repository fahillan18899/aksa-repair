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
            $table->increments('id_ppm');
            $table->date('tanggal',5)->nullable();
            $table->string('kegiatan',20)->nullable();
            $table->string('engineer',20)->nullable();
            $table->string('id_aset',40)->nullable();
            $table->string('qr_code',100)->nullable();
            $table->string('nama_alat',20)->nullable();
            $table->string('serial_number',10)->nullable();
            $table->string('merek',20)->nullable();
            $table->string('instalasi',20)->nullable();
            $table->string('tipe',20)->nullable();
            $table->string('ruangan',20)->nullable();
            $table->string('hand_hygiene',5)->nullable();
            $table->string('menyiapkan_alat_dan_bahan',5)->nullable();
            $table->string('alat_pelindung_diri',5)->nullable();
            $table->string('mengoprasikan_alat_kalibrasi',5)->nullable();
            $table->string('ktd',5)->nullable();
            $table->string('mengoprasikan_alat',5)->nullable();
            $table->string('identifikasi_bahaya',5)->nullable();
            $table->string('badan_selungkup1',7)->nullable();
            $table->string('catatan1',7)->nullable();
            $table->string('badan_selungkup2',7)->nullable();
            $table->string('catatan2',7)->nullable();
            $table->string('alat_sistem_interlock1',7)->nullable();
            $table->string('catatan3',7)->nullable();
            $table->string('alat_sistem_interlock2',7)->nullable();
            $table->string('catatan4',7)->nullable();
            $table->string('kabel_kelenturan1',7)->nullable();
            $table->string('catatan5',7)->nullable();
            $table->string('kabel_kelenturan2',7)->nullable();
            $table->string('catatan6',7)->nullable();
            $table->string('sistem_pengunci1',7)->nullable();
            $table->string('catatan7',7)->nullable();
            $table->string('sistem_pengunci2',7)->nullable();
            $table->string('catatan8',7)->nullable();
            $table->string('tombol_saklar1',7)->nullable();
            $table->string('catatan9',7)->nullable();
            $table->string('tombol_saklar2',7)->nullable();
            $table->string('catatan10',7)->nullable();
            $table->string('label_penandaan1',7)->nullable();
            $table->string('catatan11',7)->nullable();
            $table->string('label_penandaan2',7)->nullable();
            $table->string('catatan12',7)->nullable();
            $table->string('display_layar1',7)->nullable();
            $table->string('catatan13',7)->nullable();
            $table->string('display_layar2',7)->nullable();
            $table->string('catatan14',7)->nullable();
            $table->string('aksesoris1',7)->nullable();
            $table->string('catatan15',7)->nullable();
            $table->string('aksesoris2',7)->nullable();
            $table->string('catatan16',7)->nullable();
            $table->string('indikator_bunyi1',7)->nullable();
            $table->string('catatan17',7)->nullable();
            $table->string('indikator_bunyi2',7)->nullable();
            $table->string('catatan18',7)->nullable();
            $table->string('pembersihan',5)->nullable();
            $table->string('pengencangan_bagian_alat',5)->nullable();
            $table->string('pelumasan',5)->nullable();
            $table->string('kalibrasi_berkala',5)->nullable();
            $table->string('penggantian_bahan_habis_pakai',5)->nullable();
            $table->string('cek_alat',5)->nullable();
            $table->string('nama_sukucadang',20)->nullable();
            $table->string('volume',20)->nullable();
            $table->string('harga_satuan',20)->nullable();
            $table->string('jumlah_harga',20)->nullable();
            $table->string('evaluasi',20)->nullable();
            $table->string('status',30)->nullable();
            $table->string('status1',20)->nullable();
            $table->string('mulai_bekerja',20)->nullable();
            $table->string('selesai_kerja',20)->nullable();
            $table->string('durasi',20)->nullable();
            $table->string('user',20)->nullable();
            $table->string('engginer',20)->nullable();
            $table->string('kode_rs',20)->nullable();  
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
        Schema::dropIfExists('pemeliharaan_alats');
    }
};
