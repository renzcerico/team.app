<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'product_name'  => Str::random(10),
        'description'   => $faker->realText(rand(10,20)),
        'regular_price' => $faker->randomNumber(2),
        'stock'         => $faker->randomNumber(2)
    ];
});
