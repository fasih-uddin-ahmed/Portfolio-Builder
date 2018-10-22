<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
        'sender_name' => $faker->name,
        'sender_email' => $faker->unique()->safeEmail,
        'message' => $faker->sentence(10)
    ];
});
