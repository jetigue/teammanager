<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TrackTeamResult::class, function (Faker $faker) {
    return [
        'track_meet_id' 	=> App\Models\TrackMeet::all()->random()->id,
        'race_division_id' 	=> App\Models\RaceDivision::all()->random()->id,
        'gender_id'			=> App\Models\Gender::all()->random()->id,
        'place'				=> $faker->numberBetween($min = 1, $max = 5),
        'number_teams'		=> $faker->numberBetween($min = 5, $max = 20),
        'points'			=> $faker->numberBetween($min = 100, $max = 200),
    ];
});
