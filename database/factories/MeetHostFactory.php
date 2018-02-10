<?php

use Faker\Generator as Faker;

$factory->define(App\Models\MeetHost::class, function (Faker $faker) {
    return [
        'host'	=> $faker->lastName . " " . 'High School',
    ];
});
