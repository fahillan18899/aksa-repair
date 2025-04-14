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
            $table->string('tanggal', 15);
            $table->string('kegiatan', 12);
            $table->string('engineer', 100);
            $table->string('idInv_pemantauan', 100);
            $table->string('nama_alat_pemantauan', 100);
            $table->string('serial_number_pemantauan', 100);
            $table->string('merek_pemantauan', 100);
            $table->string('type_pemantauan', 100);
            $table->string('ruangan_pemantauan', 100);
            $table->text('persiapan')->nullable();
            $table->text('pemantauan')->nullable();
            $table->string('cek_alat', 225)->nullable();
            $table->string('nama_sukucadang', 100)->nullable();
            $table->string('volume', 100)->nullable();
            $table->string('harga_satuan', 225)->nullable();
            $table->string('jumlah_harga', 225)->nullable();
            $table->string('evaluasi', 225)->nullable();
            $table->string('status', 100)->nullable();
            $table->string('status1', 100)->nullable();
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
