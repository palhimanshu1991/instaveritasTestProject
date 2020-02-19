<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'detail' => $faker->sentence,
        'description' => $faker->text,
        'image'       => 'public/storage/products/dummyproduct.jpg',
        'quantity'    => 10,
    ];
});
