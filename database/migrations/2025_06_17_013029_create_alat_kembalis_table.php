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
        Schema::create('alat_kembalis', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nomer_urut')->nullable();
            $table->text('nama')->nullable();
            $table->text('no_seri')->nullable();
            $table->text('type')->nullable();
            $table->text('kerusakan')->nullable();
            $table->text('instansi')->nullable();
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
        Schema::dropIfExists('alat_kembalis');
    }
};
