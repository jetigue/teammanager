<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Gender::class, function (Faker $faker) {
    return [
         'gender' => $faker->unique()->randomElement($array = array ('Boys', 'Girls', 'Mixed')),

    ];
});
