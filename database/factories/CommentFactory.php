<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'product_id'=>$faker->numberBetween($min = 1, $max = 35),
        'description'=>$faker->word,
    ];
});
