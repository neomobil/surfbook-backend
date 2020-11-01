<?php

/** @var Factory $factory */

use App\Model;
use App\Models\Location;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\DB;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        'postcode' => $faker->postcode,
        'geolocation' => DB::raw("PointFromText('POINT(".$faker->latitude.' '.$faker->longitude.")')"),
    ];
});
