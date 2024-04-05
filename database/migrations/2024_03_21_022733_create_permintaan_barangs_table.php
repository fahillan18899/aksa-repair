<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('permintaan_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 20)->nullable();
            $table->string('merek', 20)->nullable();
            $table->string('type', 20)->nullable();
            $table->string('jumlah', 20)->nullable();
            $table->string('kode_rs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('permintaan_barangs');
    }
};
