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
            $table->string('id_aset')->primary();;
            $table->string('jenis_alat');
            $table->string('nama_alat');
            $table->string('merek');
            $table->string('type');
            $table->string('serial_number');
            $table->string('lokasi_alat');
            $table->string('tanggal_kalibrasi');
            $table->string('distributor');
            $table->string('alamat_distributor');
            $table->string('tlp_distributor');
            $table->string('email_distributor');
            $table->string('teknisi_distributor');
            $table->string('tlp_t_distributor');
            $table->string('no_sertifikat_kalibrasi');
            $table->string('teknisi_ppm');
            $table->string('harga_perolehan');
            $table->string('sumber_dana');
            $table->integer('tahun_perolehan');
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
