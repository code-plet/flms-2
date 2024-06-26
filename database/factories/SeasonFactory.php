<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SeasonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->month(),
            'start_date' => '2001/04/04',
            'end_date'=> '2001/08/04',
        ];
    }
}
