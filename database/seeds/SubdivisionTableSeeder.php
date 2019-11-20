<?php

use App\Enums\Divisions;
use App\Models\Division;
use App\Models\Subdivision;
use Illuminate\Database\Seeder;

class SubdivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = json_decode( file_get_contents( resource_path('cameroon-divisions/cameroon-divisions.json'), true ) );
        foreach ($divisions as $key => $divisionData) {
            foreach ($divisionData->subdivisions as $subdivisionName) {
                Subdivision::firstOrCreate(['name' => $subdivisionName, 'division_id' => Division::where('name', $divisionData->division)->first()->id]);
            }
        }
    }
}
