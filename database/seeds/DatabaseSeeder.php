<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->verifyEnvironmentIsProduction();
        $this->cleanDatabase();

        $this->call(UserTableSeeder::class);
    }

    /**
     * Clean all tables in database
     *
     * @return void
     */
    private function cleanDatabase()
    {
        Eloquent::unguard();
        $tables = ['users'];

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
    }

    /**
     * Verify if you environment is production
     * if is, stop the seeds and display a message
     *
     * @return void
     */
    private function verifyEnvironmentIsProduction()
    {
        if (App::environment() === 'production') {
            die('I just stopped you getting fired. Love Iago');
        }
    }


}
