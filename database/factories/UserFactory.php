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

//Valores gerados a partir de fzaninotto/Faker


//Valores gerados aleatoriamente para um usuário

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


//valores gerados aleatoriamente para um protudo
$factory->define(App\Product::class, function (Faker $faker) {

    return [
        'product' => $faker->word,
 		'description' => $faker->sentence($nbWords = 10),
 		'price' =>  $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 1000)
    ];
});