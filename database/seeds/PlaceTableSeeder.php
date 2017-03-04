<?php

use Illuminate\Database\Seeder;

class PlaceTableSeeder extends Seeder
{

    private $numberOfPlaces = 20;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Place::class, $this->numberOfPlaces)->create();
    }
}
