<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\Ore;
use Faker\Generator as Faker;

$factory->define(Ore::class, function (Faker $faker) {
    return [
        'supplier' => \App\admin\Supplier::all()->random()->name,
        'ore' => \App\admin\TexesInvoice::all()->random()->material,
        'price' => \App\admin\TexesInvoice::all()->random()->price
    ];
});
