<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('lembar_pemeliharaans', function (Blueprint $table) {
            $table->text('catatan1_1', 250)->nullable();
            $table->text('catatan2_1', 250)->nullable();
            $table->text('catatan3_1', 250)->nullable();
            $table->text('catatan4_1', 250)->nullable();
            $table->text('catatan5_1', 250)->nullable();
            $table->text('catatan6_1', 250)->nullable();
            $table->text('catatan7_1', 250)->nullable();
            $table->text('catatan8_1', 250)->nullable();
            $table->text('catatan9_1', 250)->nullable();
            $table->text('catatan10_1', 250)->nullable();
            $table->text('catatan11_1', 250)->nullable();
            $table->text('catatan12_1', 250)->nullable();
            $table->text('catatan13_1', 250)->nullable();
            $table->text('catatan14_1', 250)->nullable();
            $table->text('catatan15_1', 250)->nullable();
            $table->text('catatan16_1', 250)->nullable();
            $table->text('catatan17_1', 250)->nullable();
            $table->text('catatan18_1', 250)->nullable();

        });
    }

    public function down()
    {
        Schema::table('lembar_pemeliharaans', function (Blueprint $table) {
            Schema::dropIfExists('pemeliharaan_alats');
        });
    }
};
