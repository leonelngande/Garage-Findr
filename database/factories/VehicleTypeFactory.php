<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\VehicleType;
use Faker\Generator as Faker;

$factory->define(VehicleType::class, function (Faker $faker) {

    return [
        'name' => $faker->word
    ];
});
