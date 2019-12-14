<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

 

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'quantity' => random_int(10,99),
        'price' => random_int(100,999),
        'status' => $faker->randomElement(['available', 'out of stock'])
    ];
});


 