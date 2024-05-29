<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  => $this->faker->city(),
            'description'  => $this->faker->sentence(),
            'country'  => $this->faker->country(),
            'founded'  => $this->faker->year(),
        ];
    }
}
