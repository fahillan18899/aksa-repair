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
        Schema::create('rekaps', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tanggal')->nullable();
            $table->text('marketing')->nullable();
            $table->text('instansi')->nullable();
            $table->text('akomodasi')->nullable();
            $table->text('sperpart')->nullable();
            $table->text('sph')->nullable();
            $table->text('invoice')->nullable();
            $table->text('nominal')->nullable();
            $table->text('ppn')->nullable();
            $table->text('pph3')->nullable();
            $table->text('admin')->nullable();
            $table->text('status')->nullable();
            $table->text('keuntungan')->nullable();
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
        Schema::dropIfExists('rekaps');
    }
};
