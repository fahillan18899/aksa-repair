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
        Schema::create('data_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('no_urut')->nullable();
            $table->text('nama_alat')->nullable();
            $table->text('no_seri')->nullable();
            $table->text('type')->nullable();
            $table->text('kerusakan_alat')->nullable();
            $table->text('instansi')->nullable();
            $table->text('status')->default('1');
            $table->text('ket')->nullable();
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
        Schema::dropIfExists('data_barangs');
    }
};
