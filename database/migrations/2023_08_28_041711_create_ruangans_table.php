<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ruangans', function (Blueprint $table) {
            $table->string('id_ruangan');
            $table->string('ruangan_alat');
            $table->string('ruangan');
            $table->string('kepala_ruangan');
            $table->string('lokasi_alat');
            $table->string('kode_rs')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ruangans');
    }
};
