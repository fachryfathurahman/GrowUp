<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => mt_rand(17, 60),
            'phone' => $this->faker->randomNumber(5, true),
            'email' => $this->faker->unique()->safeEmail(),
            'user_id' => mt_rand(1, 5),
        ];
    }
}
