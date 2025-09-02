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
        Schema::create('chas_backs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('marketing')->nullable();
            $table->text('instansi')->nullable();
            $table->text('jumlah')->nullable();
            $table->text('nominal')->nullable();
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
        Schema::dropIfExists('chas_backs');
    }
};
