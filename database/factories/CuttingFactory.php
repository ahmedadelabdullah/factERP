<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\Cutting;
use Faker\Generator as Faker;

$factory->define(Cutting::class, function (Faker $faker) {
    return [
        'model_number' => $faker->numberBetween(250 , 1616),
        'no_pieces' => $faker->numberBetween(250 , 1616),
        'model_name' => $faker->company,
        'materials' => \App\admin\TexesInvoice::all()->random()->material[0],
        'meterage' => $faker->randomFloat(2.3,3.8),
        'cutter' => \App\admin\Supplier::all()->random()->name,
        'patronist' => \App\admin\Supplier::all()->random()->name,
        'no_rolls' => \App\admin\TexesInvoice::all()->random()->Norolls,
        'status' => $faker->sentence(1)
    ];
});
