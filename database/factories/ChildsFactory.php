<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChildsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = ["Laki-laki", "Perempuan"];
        return [
            'name' => $this->faker->name(),
            'age' => mt_rand(1, 5),
            'gender' => $gender[rand(0, 1)],
            'birthday' => $this->faker->dateTimeThisYear(),
            'asi' => mt_rand(0, 1),
        ];
    }
}
