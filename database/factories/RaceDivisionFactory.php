<?php

use Faker\Generator as Faker;

$factory->define(App\Models\RaceDivision::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array ('Varsity', 'Junior Varsity', 'Open')),
    ];
});
