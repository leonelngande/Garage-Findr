<?php

use App\Enums\Divisions;
use App\Enums\VehicleTypes;
use App\Models\Division;
use App\Models\VehicleType;
use Illuminate\Database\Seeder;

class VehicleTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws ReflectionException
     */
    public function run()
    {
        $vehicleTypes = VehicleTypes::getConstants();
        foreach ($vehicleTypes as $key => $vehicleTypeName) {
            VehicleType::firstOrCreate(['name' => $vehicleTypeName]);
        }
    }
}
