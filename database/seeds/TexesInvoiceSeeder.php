<?php

use Illuminate\Database\Seeder;
use App\admin\TexesInvoice;
class TexesInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TexesInvoice::class , 5)->create();

    }
}
