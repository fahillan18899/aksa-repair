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
        Schema::create('pemantauans', function (Blueprint $table) {
            $table->increments('id_pemantauan');
            $table->string('tanggal', 225);
            $table->string('kegiatan', 225);
            $table->string('engineer', 225);
            $table->string('idInv_pemantauan', 225);
            $table->string('nama_alat_pemantauan', 225);
            $table->string('serial_number_pemantauan', 225);
            $table->string('merek_pemantauan', 225);
            $table->string('type_pemantauan', 225);
            $table->string('ruangan_pemantauan', 225);
            $table->string('hand_hygiene', 225)->nullable();
            $table->string('menyiapkan_alat_dan_bahan', 225)->nullable();
            $table->string('alat_pelindung_diri', 225)->nullable();
            $table->string('mengoprasikan_alat_kalibrasi', 225)->nullable();
            $table->string('ktd', 225)->nullable();
            $table->string('mengoprasikan_alat', 225)->nullable();
            $table->string('identifikasi_bahaya', 225)->nullable();
            $table->string('badan_selungkup1', 225)->nullable();
            $table->string('badan_selungkup2', 225)->nullable();
            $table->string('kabel_kelenturan1', 225)->nullable();
            $table->string('kabel_kelenturan2', 225)->nullable();
            $table->string('tombol_saklar1', 225)->nullable();
            $table->string('tombol_saklar2', 225)->nullable();
            $table->string('display_layar1', 225)->nullable();
            $table->string('display_layar2', 225)->nullable();
            $table->string('indikator_bunyi1', 225)->nullable();
            $table->string('indikator_bunyi2', 225)->nullable();
            $table->string('alarm_sistem_interlock1', 225)->nullable();
            $table->string('alarm_sistem_interlock2', 225)->nullable();
            $table->string('sistem_pengunci1', 225)->nullable();
            $table->string('sistem_pengunci2', 225)->nullable();
            $table->string('label_penandaan1', 225)->nullable();
            $table->string('label_penandaan2', 225)->nullable();
            $table->string('aksesoris1', 225)->nullable();
            $table->string('aksesoris2', 225)->nullable();
            $table->string('cek_alat', 225)->nullable();
            $table->string('nama_sukucadang', 225)->nullable();
            $table->string('volume', 225)->nullable();
            $table->string('harga_satuan', 225)->nullable();
            $table->string('jumlah_harga', 225)->nullable();
            $table->string('evaluasi', 225)->nullable();
            $table->string('status', 225)->nullable();
            $table->string('status1', 225)->nullable();
            $table->string('foto_pendukung', 225)->nullable();
            $table->string('kode_rs', 10)->index()->nullable();
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
        Schema::dropIfExists('pemantauans');
    }
};
