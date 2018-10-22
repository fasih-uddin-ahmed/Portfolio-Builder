<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3, false),
        'description' => $faker->sentence(5),
        'technology' => $faker->sentence(3),
    ];
});
