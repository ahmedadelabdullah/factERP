<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\TexesInfo;
use App\admin\TexesInvoice;
use Faker\Generator as Faker;

$factory->define(TexesInvoice::class, function (Faker $faker) {
    return [
        'material' => $faker->sentence(2),
        'texes_info_id' => TexesInfo::all()->random()->id,
        'Norolls' => $faker->numberBetween(15,50),
        'unit_price' => $faker->numberBetween(22,89),
        'quantity' => $faker->numberBetween(1121,5000),
        'price' => $faker->numberBetween(75000,1200000)
    ];
});
