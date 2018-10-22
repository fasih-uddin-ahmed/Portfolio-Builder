<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'tagline' => $faker->sentence(4),
        'qualification' => $faker->sentence(10),
        'skills' => $faker->sentence(5),
    ];
});
