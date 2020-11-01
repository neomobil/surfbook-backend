<?php

/** @var Factory $factory */

use App\Models\Activity;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->text('200'),
        'main_image' => $faker->imageUrl()
    ];
});

$factory->afterCreating(Activity::class, function ($activity, $faker) {
    $activity->activityImages()->save(factory(\App\Models\ActivityImages::class)->make());
});
