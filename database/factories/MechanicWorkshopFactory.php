<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MechanicWorkshop;
use Faker\Generator as Faker;

$factory->define(MechanicWorkshop::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'address' => $faker->word,
        'quarter_id' => $faker->word
    ];
});
