<?php

use App\admin\TexesInfo;
use App\admin\TexesInvoice;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TexesInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TexesInfo::class , 50)->create();

    }
}
