<?php

use Illuminate\Database\Seeder;

class OffInvoiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\admin\OffInvoiceDetail::class , 3)->create();

    }
}
