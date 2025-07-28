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
        Schema::create('surat_terimas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama_1')->nullable();
            $table->text('jabatan_1')->nullable();
            $table->text('bagian_1')->nullable();
            $table->text('kontak_1')->nullable();
            $table->text('nama_2')->nullable();
            $table->text('jabatan_2')->nullable();
            $table->text('bagian_2')->nullable();
            $table->text('kontak_2')->nullable();
            //array
            $table->json('nama_alat')->nullable();
            $table->json('merek_type')->nullable();
            $table->json('no_seri')->nullable();
            $table->json('kondisi')->nullable();
            $table->json('kelengkapan')->nullable();
            $table->json('jumlah')->nullable();
            $table->json('keterangan')->nullable();
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
        Schema::dropIfExists('surat_terimas');
    }
};
