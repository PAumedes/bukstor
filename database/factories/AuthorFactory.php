<?php

use Faker\Generator as Faker;
use App\author;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
    ];
});
