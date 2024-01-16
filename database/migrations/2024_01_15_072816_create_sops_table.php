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
        Schema::create('sops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sop_pemakaian', 200)->nullable();
            $table->string('sop_pemeliharaan', 200)->nullable();
            $table->string('sop_perbaikan', 200)->nullable();
            $table->string('sop_administrasi', 200)->nullable();
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
        Schema::dropIfExists('sops');
    }
};
