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
        Schema::create('lk_dopler_simulators', function (Blueprint $table) {
            $table->increments('id');
            // PENDATAAN ALAT
            $table->string('id_alat');
            $table->string('ruangan');
            $table->string('operator_alat');
            $table->string('alat');
            $table->string('merek_tipe');
            $table->string('no_seri');
            $table->string('tanggal');
            $table->string('pelaksana');
            // ALAT UKUR
            $table->string('ukur_merek1');
            $table->string('ukur_tipe1');
            $table->string('ukur_noseri1');
            $table->string('ukur_merek2');
            $table->string('ukur_tipe2');
            $table->string('ukur_noseri2');
            $table->string('ukur_merek3');
            $table->string('ukur_tipe3');
            $table->string('ukur_noseri3');
            $table->string('ukur_merek4');
            $table->string('ukur_tipe4');
            $table->string('ukur_noseri4');
            // KONDISI RUANGAN
            $table->string('suhu', 10);
            $table->string('kelembapan', 10);
            // PEMERIKSAAN KONDISI
            $table->string('fisik_fungsi_1', 10);
            $table->string('keterangan_1', 100);
            $table->string('fisik_fungsi_2', 10);
            $table->string('keterangan_2', 100);
            $table->string('fisik_fungsi_3', 10);
            $table->string('keterangan_3', 100);
            $table->string('fisik_fungsi_4', 10);
            $table->string('keterangan_4', 100);
            $table->string('fisik_fungsi_5', 10);
            $table->string('keterangan_5', 100);
            // PENGUKURAN LISTRIK
            $table->string('listrik_1', 10);
            $table->string('listrik_2', 10);
            $table->string('listrik_3', 10);
            $table->string('listrik_4', 10);
            $table->string('listrik_5', 10);
            $table->string('listrik_6', 10);
            $table->string('listrik_7', 10);
            $table->string('listrik_8', 10);
            $table->string('listrik_9', 10);
            $table->string('listrik_10', 10);
            // PENGUKURAN KINERJA
            $table->string('hasil_pengukuran_30_1', 5);
            $table->string('hasil_pengukuran_30_2', 5);
            $table->string('hasil_pengukuran_30_3', 5);
            $table->string('hasil_pengukuran_30_4', 5);
            $table->string('hasil_pengukuran_30_5', 5);
            $table->string('hasil_pengukuran_30_6', 5);
            $table->string('hasil_pengukuran_60_1', 5);
            $table->string('hasil_pengukuran_60_2', 5);
            $table->string('hasil_pengukuran_60_3', 5);
            $table->string('hasil_pengukuran_60_4', 5);
            $table->string('hasil_pengukuran_60_5', 5);
            $table->string('hasil_pengukuran_60_6', 5);
            $table->string('hasil_pengukuran_120_1', 5);
            $table->string('hasil_pengukuran_120_2', 5);
            $table->string('hasil_pengukuran_120_3', 5);
            $table->string('hasil_pengukuran_120_4', 5);
            $table->string('hasil_pengukuran_120_5', 5);
            $table->string('hasil_pengukuran_120_6', 5);
            $table->string('hasil_pengukuran_180_1', 5);
            $table->string('hasil_pengukuran_180_2', 5);
            $table->string('hasil_pengukuran_180_3', 5);
            $table->string('hasil_pengukuran_180_4', 5);
            $table->string('hasil_pengukuran_180_5', 5);
            $table->string('hasil_pengukuran_180_6', 5);
            $table->string('hasil_pengukuran_240_1', 5);
            $table->string('hasil_pengukuran_240_2', 5);
            $table->string('hasil_pengukuran_240_3', 5);
            $table->string('hasil_pengukuran_240_4', 5);
            $table->string('hasil_pengukuran_240_5', 5);
            $table->string('hasil_pengukuran_240_6', 5);
            // KESIIMPULAN
            $table->string('kesimpulan_fisik_fungsi', 5);
            $table->string('kesimpulan_listrik', 5);
            $table->string('kesimpulan_kinerja', 5);
            $table->string('catatan', 225);
            $table->string('kode_rs', 8);
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
        Schema::dropIfExists('lk_dopler_simulators');
    }
};
