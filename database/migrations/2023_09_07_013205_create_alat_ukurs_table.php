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
        Schema::create('alat_ukurs', function (Blueprint $table) {
            $table->string('id_number')->primary();
            $table->string('nama');
            $table->string('serial_number');
            $table->string('merek');
            $table->string('type');
            $table->string('parameter_ukur');

            $table->string('kode_rs')->nullable();
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
        Schema::dropIfExists('alat_ukurs');
    }
};
