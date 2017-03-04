<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    private $numberOfUsers = 50;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, $this->numberOfUsers)->create();
    }

}
