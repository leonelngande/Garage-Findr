<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Quarter;
use Faker\Generator as Faker;

$factory->define(Quarter::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'subdivision_id' => $faker->word
    ];
});
