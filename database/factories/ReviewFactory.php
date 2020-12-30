<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'kategori' => $faker->sentence(),
        'comment' => $faker->sentence(),
        'featured_image' => $faker->imageUrl(750, 300, 'cat',true),
    ];
});
