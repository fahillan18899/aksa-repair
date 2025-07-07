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
        Schema::create('sphs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lokasi_tanggal');
            $table->string('no_surat');
            $table->string('hal');
            $table->string('yth');
            $table->string('nama_alat');
            $table->string('keterangan');
            $table->string('jumlah');
            $table->string('harga');
            $table->string('harga_tanpa_pajak');
            $table->string('pajak');
            $table->string('total');
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
        Schema::dropIfExists('sphs');
    }
};
