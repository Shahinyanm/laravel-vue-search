<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Hotel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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


$factory->define(Hotel::class, function (Faker $faker) {
    $faker->addProvider(new Liior\Faker\Prices($faker));
    return [
        'name' => $faker->company,
        'price' => $faker->price(100, 20000, true, true),
        'bedrooms' => $faker->randomNumber(),
        'bathrooms' => $faker->randomNumber(),
        'storeys' => $faker->randomNumber(),
        'garages' => $faker->randomNumber(),
    ];
});
