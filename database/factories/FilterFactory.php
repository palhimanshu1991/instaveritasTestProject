<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Filter;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Filter::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
    ];
});


