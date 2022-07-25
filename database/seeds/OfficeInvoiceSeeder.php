<?php

use App\admin\OfficeInvoice;
use Illuminate\Database\Seeder;

class OfficeInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OfficeInvoice::class , 3)->create();

    }
}
