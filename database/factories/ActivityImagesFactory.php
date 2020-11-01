<?php

/** @var Factory $factory */

use App\Model;
use App\Models\ActivityImages;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(ActivityImages::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl(),
        'name' => $faker->title,
        'description' => $faker->text(200)
    ];
});
