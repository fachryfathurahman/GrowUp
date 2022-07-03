<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = ["male", "female"];
        return [
            'name' => $this->faker->name(),
            'age' => mt_rand(1, 5),
            'gender' => $gender[rand(0, 1)],
            'birthday' => $this->faker->dateTimeThisYear(),
            'breast_milk' => mt_rand(0, 1),
            'user_id' => mt_rand(1, 5),
        ];
    }
}
