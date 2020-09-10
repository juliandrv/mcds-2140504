<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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

$factory->define(User::class, function (Faker $faker) {

    $gender = $faker->randomElement(['male', 'female']);    

    return [
        'fullname'          => $faker->name($gender),
        'email'             => $faker->unique()->safeEmail,
        'phone'             => $faker->numberbetween($min= 3101000000, $max=3202000000),
        'birthdate'         => $faker->dateTimeBetween('1960-01-01', '1999-12-12'),
        'gender'            => $gender,
        'address'           => 'calle falsa 123',
        'photo'             => $faker->image('app/images',640,480, null, false),
        'email_verified_at' => now(),
        'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token'    => Str::random(10),
    ];
});
