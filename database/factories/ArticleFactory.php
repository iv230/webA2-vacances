<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->realText(200),
        'price' => $faker->randomFloat(2, 1, 2000),
        'created_at' => now(),
    ];
});
