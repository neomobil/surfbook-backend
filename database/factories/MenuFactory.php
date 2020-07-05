<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menu;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Menu::class, static function (Faker $faker) {
    return [
        'name' => $faker->safeColorName,
        'slug' => $faker->slug,
        'image' => $faker->imageUrl()
    ];
});
