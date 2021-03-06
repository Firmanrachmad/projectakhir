<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Wisata;
use Faker\Generator as Faker;

$factory->define(Wisata::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->sentence(),
        'featured_image' => $faker->imageUrl(750, 300, 'cat',true),
    ];
});
