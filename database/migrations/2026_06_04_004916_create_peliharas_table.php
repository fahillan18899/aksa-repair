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
        Schema::create('peliharas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('rs')->nullable();
            $table->text('id_alat')->nullable();
            $table->text('teknisi')->nullable();
            $table->text('nama_alat')->nullable();
            $table->text('seri')->nullable();
            $table->text('merek')->nullable();
            $table->text('type')->nullable();
            $table->text('lokasi')->nullable();
            $table->longText('persiapan')->nullable();
            $table->longText('pemantauan')->nullable();
            $table->text('cek_alat')->nullable();
            $table->text('evaluasi')->nullable();
            $table->text('foto')->nullable();
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
        Schema::dropIfExists('peliharas');
    }
};
