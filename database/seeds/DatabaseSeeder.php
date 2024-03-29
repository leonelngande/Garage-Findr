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
         $this->call(DivisionTableSeeder::class);
         $this->call(SubdivisionTableSeeder::class);
         $this->call(VehicleTypeTableSeeder::class);
    }
}
