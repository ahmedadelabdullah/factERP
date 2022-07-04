<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\OffInvoiceDetail;
use Faker\Generator as Faker;

$factory->define(OffInvoiceDetail::class, function (Faker $faker) {
    return [
        'office_invoices_id' => \App\admin\OfficeInvoice::all()->random()->id,
//        'dress_id' => \App\admin\Dress::all()->random()->id,
//        'offices_id' => Office::all()->random()->id,
        'office_invoices_id' => $faker->numberBetween(1,4),
        'quantity' => $faker->numberBetween(1500,5000),
        'unit_price' => $faker->date(),
        'price' => $faker->numberBetween(12,200),

    ];
});
