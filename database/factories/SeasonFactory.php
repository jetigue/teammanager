<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Season::class, function (Faker $faker) {
    return [
        'season' => $faker->unique()->randomElement($array = array (
        	'Outdoor Track', 
        	'Indoor Track',
        	'Cross Country'
        )),
    ];
});
