<?php

use Illuminate\Database\Seeder;

class OreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\admin\Ore::class , 50)->create();

    }
}
