<?php

namespace Database\Seeders;

use App\Models\StockOpname;
use Illuminate\Database\Seeder;

class StockOpnameSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StockOpname::factory()->count(1000)->create();
    }
}
