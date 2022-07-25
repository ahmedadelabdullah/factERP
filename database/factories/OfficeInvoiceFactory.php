<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\Office;
use App\admin\OfficeInvoice;
use Faker\Generator as Faker;

$factory->define(OfficeInvoice::class, function (Faker $faker) {
    return [
//        'customer' => Office::all()->random()->name,
//        'dress_id' => \App\admin\Dress::all()->random()->id,
        'offices_id' => Office::all()->random()->id,
        'no_models' => $faker->numberBetween(1,4),
        'invoice_number' => $faker->numberBetween(1500,5000),
        'date' => $faker->date(),
        'total_pieces' => $faker->numberBetween(12,200),
        'total_amount' => $faker->numberBetween(5000,24000),
        'image' => $faker->imageUrl()
    ];
});
