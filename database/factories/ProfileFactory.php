<?php

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

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'portfolio' => $faker->domainName,
        'github' => $faker->username,
        'twitter' => $faker->username,
        'php' => $faker->numberBetween($min = 5, $max = 100),
        'sql' => $faker->numberBetween($min = 5, $max = 100),
        'css' => $faker->numberBetween($min = 5, $max = 100),
        'javascript' => $faker->numberBetween($min = 5, $max = 100),
        'html' => $faker->numberBetween($min = 5, $max = 100)
    ];
});