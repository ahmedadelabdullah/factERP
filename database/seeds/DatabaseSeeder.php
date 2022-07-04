<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SupplierSeeder::class);
        $this->call(TexesInfoSeeder::class);
        $this->call(TexesInvoiceSeeder::class);
        $this->call(OreSeeder::class);
        $this->call(CuttingSeeder::class);
        $this->call(DressSeeder::class);
        $this->call(OfficeSeeder::class);
        $this->call(OfficeInvoiceSeeder::class);
        $this->call(OffInvoiceDetailSeeder::class);
    }
}
