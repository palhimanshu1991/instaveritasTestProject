<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Review;
use App\User;
use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Review::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(App\User::all()->pluck('id')->toArray()),
        'product_id' => $faker->randomElement(App\Models\Product::all()->pluck('id')->toArray()),
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'description' => $faker->text($maxNbChars = 10),
    ];
});
