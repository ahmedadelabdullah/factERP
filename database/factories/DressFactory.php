<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\Dress;
use Faker\Generator as Faker;

$factory->define(Dress::class, function (Faker $faker) {
    return [
        'model_number' => $faker->numberBetween(200,350),
        'model_name' => $faker->sentence(3),
        'meterage' => $faker->randomFloat(3,2 , 4),
        'price' => $faker->numberBetween(200,350),
        'available' => $faker->numberBetween(500,1616)
    ];
});
