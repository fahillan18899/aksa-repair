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
        Schema::table('lembar_pemeliharaans', function (Blueprint $table) {
            $table->text('catatan1', 250)->nullable();
            $table->text('catatan2', 250)->nullable();
            $table->text('catatan3', 250)->nullable();
            $table->text('catatan4', 250)->nullable();
            $table->text('catatan5', 250)->nullable();
            $table->text('catatan6', 250)->nullable();
            $table->text('catatan7', 250)->nullable();
            $table->text('catatan8', 250)->nullable();
            $table->text('catatan9', 250)->nullable();
            $table->text('catatan10', 250)->nullable();
            $table->text('catatan11', 250)->nullable();
            $table->text('catatan12', 250)->nullable();
            $table->text('catatan13', 250)->nullable();
            $table->text('catatan14', 250)->nullable();
            $table->text('catatan15', 250)->nullable();
            $table->text('catatan16', 250)->nullable();
            $table->text('catatan17', 250)->nullable();
            $table->text('catatan18', 250)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lembar_pemeliharaans', function (Blueprint $table) {
            Schema::dropIfExists('pemeliharaan_alats');
        });
    }
};
