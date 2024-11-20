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
        Schema::create('lk_alats', function (Blueprint $table) {
            $table->increments('id');
            // Pendataan alat 
            $table->string('id_alat', 30);
            $table->string('ruangan', 50);
            $table->string('operator_alat', 50);
            $table->string('alat', 50);
            $table->string('merek_tipe', 50);
            $table->string('no_seri', 50);
            $table->string('tanggal', 6);
            $table->string('pelaksana', 50);
            // Alat ukur 1
            $table->string('ukur_merek1', 10);
            $table->string('ukur_tipe1', 10);
            $table->string('ukur_noseri1', 10);
            // Alat ukur 2
            $table->string('ukur_merek2', 10);
            $table->string('ukur_tipe2', 10);
            $table->string('ukur_noseri2', 10);
            // Kondisi ruangan
            $table->string('suhu', 10);
            $table->string('kelembapan', 10);
            // pemeriksaan kondisi fisik, fungnsi
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
            $table->string('fisik_fungsi_11', 10);
            $table->string('keterangan_11', 100);
            $table->string('fisik_fungsi_12', 10);
            $table->string('keterangan_12', 100);
            $table->string('fisik_fungsi_13', 10);
            $table->string('keterangan_13', 100);
            // pengukuran keselamatan listrik
            $table->string('listrik_1', 10);
            $table->string('listrik_2', 10);
            $table->string('listrik_3', 10);
            $table->string('listrik_4', 10);
            // pengukuran kinerja 
            $table->string('jenis_gas', 10);
            $table->string('seting_alat_1', 10);
            $table->string('seting_alat_2', 10);
            $table->string('seting_alat_3', 10);
            $table->string('seting_alat_4', 10);
            $table->string('seting_alat_5', 10);
            $table->string('seting_alat_6', 10);
            $table->string('seting_alat_7', 10);
            $table->string('terukur_1', 10);
            $table->string('terukur_2', 10);
            $table->string('terukur_3', 10);
            $table->string('terukur_4', 10);
            $table->string('terukur_5', 10);
            $table->string('terukur_6', 10);
            $table->string('terukur_7', 10);
            // kesimpulan
            $table->string('kesimpulan_fisik_fungsi', 10);
            $table->string('kesimpulan_listrik', 10);
            $table->string('kesimpulan_kinerja', 10);
            // catatan
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
        Schema::dropIfExists('lk_alats');
    }
};
