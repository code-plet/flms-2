<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LeagueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'league_name' => $this->faker->company(),
            'description' => $this->faker->sentence(),
        ];
    }
}
