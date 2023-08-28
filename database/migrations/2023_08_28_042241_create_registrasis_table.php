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
        Schema::create('registrasis', function (Blueprint $table) {
            $table->string('Id_Aset');
            $table->string('Jenis_Alat');
            $table->string('Nama_Alat');
            $table->string('Merek');
            $table->string('Type');
            $table->string('Serial_Number');
            $table->string('Lokasi_Alat');
            $table->string('Tanggal_Kalibrasi');
            $table->string('Distributor');
            $table->string('Alamat_Distributor');
            $table->string('TLP_Distributor');
            $table->string('Email_Distributor');
            $table->string('Teknisi_Distributor');
            $table->string('TLP_T_Distributor');
            $table->string('No_Sertifikat_Kalibrasi');
            $table->string('Teknisi_PPM');
            $table->string('Harga_Perolehan');
            $table->string('Sumber_Dana');
            $table->string('Tahun_Pembuatan');
            $table->string('Tahun_Perolehan');
            $table->string('kode_rs');
            $table->date('jadwal_pemeliharaan');
            $table->integer('umur_alat');
            $table->string('no_inventaris_1');
            $table->string('no_inventaris_2');
            $table->integer('penyusutan_aset');

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
        Schema::dropIfExists('registrasis');
    }
};
