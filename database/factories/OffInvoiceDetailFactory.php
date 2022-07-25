<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin\OffInvoiceDetail;
use App\admin\OfficeInvoice;
use Faker\Generator as Faker;

$factory->define(OffInvoiceDetail::class, function (Faker $faker) {
    return [
        'office_invoices_id' => OfficeInvoice::all()->random()->id,
        'model' => \App\admin\Dress::all()->random()->model_name,
//        'offices_id' => Office::all()->random()->id,
//        'office_invoices_id' => $faker->numberBetween(1,4),
        'quantity' => $faker->numberBetween(15,50),
        'unit_price' =>$faker->numberBetween(200,300),
        'price' => $faker->numberBetween(10000,20000),

    ];
});
