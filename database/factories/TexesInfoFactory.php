<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\Supplier;
use App\admin\TexesInfo;
use Faker\Generator as Faker;

$factory->define(TexesInfo::class, function (Faker $faker) {


    return [
        'invoice_number' => $faker->numberBetween(1215,12135),
        'supplier_id' => Supplier::all()->random()->id,
        'date' => $faker->date('y-m-d'),
        'comment' =>$faker->sentence(10),
        'total_rolls' => $faker->numberBetween(15,50),
        'total_amount' => $faker->numberBetween(22,89),

    ];
//    return [
//        'material' => $faker->sentence(2),
//        'texesinfo_id' => Supplier::all()->random()->id,
//        'Norolls' => $faker->date(),
//        'unit_price' => $faker->sentence(20),
//        'quantity' => $faker->random(6,120),
//        'price' => $faker->random(),
//    ];
});
