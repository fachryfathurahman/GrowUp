<?php

namespace Database\Seeders;

use App\Models\Growth;
use Illuminate\Database\Seeder;

class GrowthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Growth::factory(10)->create();
    }
}
