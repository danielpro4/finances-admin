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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(FinancesAdmin\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(FinancesAdmin\Models\Spent::class, function (Faker\Generator $faker) {

    return [
        "description" => $faker->paragraph(2),
        "value"       => $faker->randomNumber(2),
        "dueDate"     => $faker->date(),
        "paymentDate" => $faker->date()
    ];
});
