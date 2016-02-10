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

    $lFaker = Faker\Factory::create('pt_BR');

    return [
        'name' => $lFaker->name,
        'email' => $lFaker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Report::class, function (Faker\Generator $faker) {

    $lFaker = Faker\Factory::create('pt_BR');

    return [
        'id_reported' => $lFaker->numberBetween(1,50),
        'id_reporter' => $lFaker->numberBetween(1,50),
        'report' => $lFaker->realText($maxNbChars = 100, $indexSize = 2),
        'done' => $lFaker->boolean(40),
    ];
});

$factory->define(App\Patrimony::class, function (Faker\Generator $faker) {

    $lFaker = Faker\Factory::create('pt_BR');

    return [
        'block' => $lFaker->numberBetween(1,25),
        'number' => $lFaker->numberBetween(100,105),
    ];
});
