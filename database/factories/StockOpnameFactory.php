<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StockOpname>
 */
class StockOpnameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $jumlah_masuk = fake()->numberBetween(1, 500);
        $jumlah_sekarang = fake()->numberBetween(1, 500);
        $jumlah_keluar = fake()->numberBetween(1, 500);
        $total = $jumlah_sekarang - $jumlah_keluar;

        return [
            'nama' => fake()->colorName,
            'type' => fake()->randomElement(['Non Medis', 'Medis', 'K45']),
            'lokasi_pemakaian' => fake()->address,
            'jumlah_masuk' => $jumlah_masuk,
            'jumlah_sekarang' => $jumlah_sekarang,
            'jumlah_keluar' => $jumlah_keluar,
            'tanggal_masuk' => fake()->date('Y-m-d'),
            'tanggal_keluar' => fake()->date(),
            'stock' => $total,
            'kode_rs' => 'RS0000',
        ];
    }
}
