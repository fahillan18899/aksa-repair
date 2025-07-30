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
        Schema::create('berita_acaras', function (Blueprint $table) {
            $table->increments('id');
            $table->json('ba')->nullable();
            $table->json('rs')->nullable();
            $table->json('kontak')->nullable();
            $table->json('alat')->nullable();
            $table->json('jenis')->nullable();
            $table->json('skc')->nullable();
            $table->text('keluhan')->nullable();
            $table->text('aksi')->nullable();
            $table->text('hasil')->nullable();
            $table->text('pj')->nullable();
            $table->text('teknisi')->nullable();
            $table->text('tanggal_1')->nullable();
            $table->text('tanggal_2')->nullable();
            $table->text('instansi')->nullable();
            $table->text('path')->nullable();
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
        Schema::dropIfExists('berita_acaras');
    }
};
