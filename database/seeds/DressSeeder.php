<?php

use Illuminate\Database\Seeder;

class DressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\admin\Dress::class , 5)->create();

    }
}
