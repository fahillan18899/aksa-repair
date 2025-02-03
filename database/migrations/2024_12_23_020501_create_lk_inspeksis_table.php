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
        Schema::create('lk_inspeksis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_alat', 10)->nullable();
            $table->string('nomer_seri', 15)->nullable();
            $table->string('periksa_fisik', 7)->nullable();
            $table->string('lengkap_alat', 7)->nullable();
            $table->string('fungsi_alat', 7)->nullable();
            $table->string('catatan', 100)->nullable();
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
        Schema::dropIfExists('lk_inspeksis');
    }
};
