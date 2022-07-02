<?php

namespace Database\Seeders;

use App\Models\Parents;
use Illuminate\Database\Seeder;

class ParentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parents::factory(10)->create();
    }
}
