<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description'=> $faker->paragraph,
        'price'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 10000),
        'rpercent'=> $faker->numberBetween($min = 0, $max = 80),
        'rating'=> $faker->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 5),
        'quantity'=> $faker->randomDigitNotNull,
    ];
});
 