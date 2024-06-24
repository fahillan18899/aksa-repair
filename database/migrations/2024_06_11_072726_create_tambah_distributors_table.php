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
        Schema::create('tambah_distributors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_distributor_p', 255);
            $table->string('alamat_distributor_p', 255);
            $table->string('telphone_distributor_p', 255);
            $table->string('email_distributor_p', 255);
            $table->string('teknisi_distributor_p', 255);
            $table->string('telphone_teknisi_dis_p', 255);
            $table->string('kode_rs', 255);
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
        Schema::dropIfExists('tambah_distributors');
    }
};
