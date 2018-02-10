<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TrackVenue::class, function (Faker $faker) {
    return [
        'venue'	=>	 $faker->lastName . " " . 'Stadium',
        'city'  =>	$faker->city,
        'state'	=>	$faker->stateAbbr,
    ];
});
