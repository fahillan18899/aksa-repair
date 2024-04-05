<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('history_stock_opnames', function (Blueprint $table) {
            $table->id();
            $table->integer('sparepart_id')->index();
            $table->integer('total_sparepart');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('history_stock_opnames');
    }
};
