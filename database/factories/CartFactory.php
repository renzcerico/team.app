<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'product_id' => $faker->randomDigit,
        'quantity' => $faker->randomDigit
    ];
});
