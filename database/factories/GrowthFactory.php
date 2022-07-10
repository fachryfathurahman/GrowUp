<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GrowthFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'child_id' => mt_rand(1, 5),
            'growth_date' => $this->faker->dateTimeThisYear(),
            'age' => mt_rand(1, 5),
            'height' => mt_rand(50, 90),
            'weight' => mt_rand(8, 15),
            'head' => mt_rand(8, 15),
            'zScore' => mt_rand(0, 5),
            // 'first_month_weight' => $this->faker->randomFloat(1, 3, 5),
            // 'sixth_month_weight' => $this->faker->randomFloat(1, 6, 9),
            // 'twelfth_month_weight' => $this->faker->randomFloat(1, 8, 11),
            // 'eighteenth_month_weight' => $this->faker->randomFloat(1, 9, 13),
            // 'twentyfourth_month_weight' => $this->faker->randomFloat(1, 12, 14),
            // 'thirtieth_weight' => $this->faker->randomFloat(1, 13, 14),
            // 'thirtysixth_month_weight' => $this->faker->randomFloat(1, 13, 14),
            // 'fortysecond_month_weight' => $this->faker->randomFloat(1, 15, 16),
            // 'fortyeighth_month_weight' => $this->faker->randomFloat(1, 15, 16),
            // 'fiftyfourth_month_weight' => $this->faker->randomFloat(1, 16, 17),
            // 'sixtieth_month_weight' => $this->faker->randomFloat(1, 17, 18),

            // 'first_month_length' => $this->faker->randomFloat(1, 50, 60),
            // 'sixth_month_length' => $this->faker->randomFloat(1, 60, 65),
            // 'twelfth_month_length' => $this->faker->randomFloat(1, 60, 65),
            // 'eighteenth_month_length' => $this->faker->randomFloat(1, 60, 65),
            // 'twentyfourth_month_length' => $this->faker->randomFloat(1, 65, 70),
            // 'thirtieth_length' => $this->faker->randomFloat(1, 70, 75),
            // 'thirtysixth_month_length' => $this->faker->randomFloat(1, 75, 80),
            // 'fortysecond_month_length' => $this->faker->randomFloat(1, 85, 90),
            // 'fortyeight_month_length' => $this->faker->randomFloat(1, 85, 90),
            // 'fiftyfourth_month_length' => $this->faker->randomFloat(1, 90, 95),
            // 'sixtieth_month_length' => $this->faker->randomFloat(1, 95, 100),
        ];
    }
}
