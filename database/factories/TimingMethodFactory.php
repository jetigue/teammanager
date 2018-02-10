<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TimingMethod::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array ('Handheld', 'FAT')),
    ];
});
