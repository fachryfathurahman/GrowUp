<?php

namespace Database\Seeders;

use App\Models\Childs;
use Illuminate\Database\Seeder;

class ChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Childs::factory(10)->create();
    }
}
