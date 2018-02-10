<?php

use Illuminate\Database\Seeder;

class RaceDivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\RaceDivision', 3)->create();
    }
}
