<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\League;
use App\Models\Player;
use App\Models\Season;
use App\Models\Table;
use App\Models\User;
use Faker\Factory;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        User::factory()->create([
            'email' => 'puchapu10@yahoo.com',
            'password' => "123456789"
        ]);
        User::factory()->count(5)->create();

        $leagues = League::factory(2)->create();

        $clubs = Club::factory(4)->create();

        $players = Player::factory(40)->state(new Sequence(
            fn($sequence) => ['club_id' => $faker->randomElement($clubs) ] 
        ))->create();

        $seasons = Season::factory(5)->state(new Sequence(
            fn($sequence) => ['league_id' => $faker->randomElement($leagues) ] 
        ))->create();

        $tables = Table::factory(20)->state(new Sequence(
            fn($sequence) => [
                'season_id' => $faker->randomElement($seasons) ,
                'club_id' => $faker->randomElement($clubs)
            ]

        ))->create();



    }
}
