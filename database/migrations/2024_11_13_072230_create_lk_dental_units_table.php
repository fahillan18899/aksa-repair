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
        Schema::create('lk_dental_units', function (Blueprint $table) {
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
            $table->string('fisik_fungsi_6', 10);
            $table->string('keterangan_6', 100);
            $table->string('fisik_fungsi_7', 10);
            $table->string('keterangan_7', 100);
            $table->string('fisik_fungsi_8', 10);
            $table->string('keterangan_8', 100);
            $table->string('fisik_fungsi_9', 10);
            $table->string('keterangan_9', 100);
            $table->string('fisik_fungsi_10', 10);
            $table->string('keterangan_10', 100);
            // PENGUKURAN LISTRIK
            $table->string('listrik_1', 10);
            $table->string('listrik_2', 10);
            $table->string('listrik_3', 10);
            $table->string('listrik_4', 10);
            // KESIIMPULAN
            $table->string('kesimpulan_fisik_fungsi', 10);
            $table->string('kesimpulan_listrik', 10);
            $table->string('kesimpulan_kinerja', 10);
            $table->string('catatan', 225);
            $table->string('kode_rs', 100);
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
        Schema::dropIfExists('lk_dental_units');
    }
};
