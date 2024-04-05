<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alats', function (Blueprint $table) {
            $table->string('id_alat');
            $table->string('nama_alat');
            $table->string('kode_rs')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alats');
    }
};
