<?php

use Illuminate\Database\Seeder;

class CuttingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\admin\Cutting::class , 50)->create();

    }
}
