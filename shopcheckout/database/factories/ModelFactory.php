<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(7),
        'price' => $faker->randomNumber(2),
        'currency' => 'AUD',
        'special_offer' => mt_rand(0, 1),
        'special_offer_formula' => '{"buy":2,"pay":"1"}',
        'special_offer_description' => 'buy one, get one free',
        'hiden' =>  mt_rand(0, 1),
    ];
});


$factory->define(App\Transaction::class, function () {
    return [
        'product_id' => mt_rand(0, 10),
        'product_qty' => mt_rand(1, 200),
        'user_id' => mt_rand(3, 9),
        'special' => mt_rand(0, 1),
    ];
});