<?php

use App\Enums\Divisions;
use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws ReflectionException
     */
    public function run()
    {
        $divisions = Divisions::getConstants();
        foreach ($divisions as $key => $divisionName) {
            Division::firstOrCreate(['name' => $divisionName]);
        }
    }
}
