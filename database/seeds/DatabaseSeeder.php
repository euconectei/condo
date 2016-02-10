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
        // $this->call(UserTableSeeder::class);
        factory(App\User::class, 100)->create();
        factory(App\Report::class, 100)->create();
        factory(App\Patrimony::class, 100)->create();
    }
}
