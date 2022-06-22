<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {

            return [
                'name' => $faker->streetName,
                'title' => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'previous_balance' => $faker->numberBetween(15000,32000),
                'state' => $faker->sentence(1)
            ];

});
