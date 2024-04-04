<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gedungs', function (Blueprint $table) {
            $table->string('id_gedung');
            $table->string('nama_gedung');
            $table->string('kode_rs')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gedungs');
    }
};
