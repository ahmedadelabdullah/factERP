<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'supply' => $faker->sentence(2),
        'mobile' => $faker->phoneNumber,
        'title' => $faker->address,
        'balance' =>$faker->numberBetween(20513,1175600),
    ];
});
