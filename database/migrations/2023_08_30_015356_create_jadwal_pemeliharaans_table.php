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
        Schema::create('jadwal_pemeliharaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lokasi_alat');
            $table->string('nama_alat');
            $table->date('jadwal');
            $table->string('status', 4)->default('1');
            $table->string('kode_rs', 8)->nullable();
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
        Schema::dropIfExists('jadwal_pemeliharaans');
    }
};
