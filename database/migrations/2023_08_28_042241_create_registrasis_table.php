<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\TableExtension;

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
            $table->string('id_aset')->primary();
            $table->string('qr_code');
            $table->string('jenis_alat');
            $table->string('nama_alat');
            $table->string('merek');
            $table->string('type');
            $table->string('serial_number');
            $table->string('gambar')->nullable();
            $table->string('lokasi_alat');
            $table->string('tanggal_kalibrasi')->nullable();
            $table->string('distributor')->nullable();
            $table->string('alamat_distributor')->nullable();
            $table->string('tlp_distributor')->nullable();
            $table->string('email_distributor')->nullable();
            $table->string('teknisi_distributor')->nullable();
            $table->string('tlp_t_distributor')->nullable();
            $table->string('no_sertifikat_kalibrasi')->nullable();
            $table->string('teknisi_ppm')->nullable();
            $table->string('harga_perolehan')->nullable();
            $table->string('sumber_dana')->nullable();
            $table->integer('tahun_perolehan')->nullable();
            $table->string('kode_rs')->nullable();
            $table->date('jadwal_pemeliharaan')->nullable();
            $table->integer('umur_alat')->nullable();
            $table->string('akl')->nullable();
            $table->string('akd')->nullable();
            $table->string('no_inventaris_1')->nullable();
            $table->string('no_inventaris_2')->nullable();
            $table->integer('penyusutan_aset')->nullable();

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
