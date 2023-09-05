<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registrasi>
 */
class RegistrasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id_aset" => $this->faker->unique()->name(),
            "jenis_alat" =>  $this->faker->name(),
            "nama_alat" =>  $this->faker->name(),
            "merek" =>  $this->faker->name(),
            "type" =>  $this->faker->name(),
            "serial_number" =>  $this->faker->name(),
            "lokasi_alat" =>  $this->faker->name(),
            "tanggal_kalibrasi" =>  now(),
            "distributor" =>  $this->faker->name(),
            "alamat_distributor" =>  $this->faker->name(),
            "tlp_distributor" =>  $this->faker->name(),
            "email_distributor" =>  $this->faker->name(),
            "teknisi_distributor" =>  $this->faker->name(),
            "tlp_t_distributor" =>  $this->faker->name(),
            "no_sertifikat_kalibrasi" =>  $this->faker->name(),
            "teknisi_ppm" =>  $this->faker->name(),
            "harga_perolehan" =>  $this->faker->phoneNumber(),
            "sumber_dana" =>  $this->faker->name(),
            "tahun_perolehan" =>   "2022",
            "kode_rs" =>  $this->faker->name(),
            "jadwal_pemeliharaan" =>  now(),
            "umur_alat" =>  "3",
            "no_inventaris_1" =>  $this->faker->name(),
            "no_inventaris_2" =>  $this->faker->name(),
            "penyusutan_aset" =>  "7",
        ];
    }
}
