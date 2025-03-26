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
            $table->string('operator_alat', 25);
            $table->string('alat', 50);
            $table->string('merek_tipe', 50);
            $table->string('no_seri', 50);
            $table->string('tanggal', 6);
            $table->string('pelaksana', 25);
            $table->json('alat_ukur');
            // Kondisi ruangan
            $table->string('suhu', 5);
            $table->string('kelembapan', 5);
            $table->json('pemeriksa_kondisi');
            // pengukuran keselamatan listrik
            $table->string('listrik_1', 5);
            $table->string('listrik_2', 5);
            $table->string('listrik_3', 5);
            $table->string('listrik_4', 5);
            // kinerja alat
            $table->string('judul', 10);
            $table->string('kinerja', 10);
            // kesimpulan
            $table->string('kesimpulan_fisik_fungsi', 10);
            $table->string('kesimpulan_listrik', 10);
            $table->string('kesimpulan_kinerja', 10);
            // catatan
            $table->string('catatan', 100);
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
        Schema::dropIfExists('lk_alats');
    }
};
