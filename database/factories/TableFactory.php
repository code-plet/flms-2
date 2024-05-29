<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matches_played' => 10,
            'won' => 5,
            'drawn'=> 2,
            'lost'=> 3,
            'goals_scored' => 10,
            'goals_conceded' => 2,
            'goal_difference' => 2,
            'points'=> 23,
        ];
    }
}
