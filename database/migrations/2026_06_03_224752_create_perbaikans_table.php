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
        Schema::create('perbaikans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('rs')->nullable();
            $table->text('id_alat')->nullable();
            $table->text('nama_alat')->nullable();
            $table->text('merek')->nullable();
            $table->text('type')->nullable();
            $table->text('seri')->nullable();
            $table->text('lokasi')->nullable();
            $table->text('kepala')->nullable();
            $table->text('teknisi')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->text('korektif')->nullable();
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('perbaikans');
    }
};
