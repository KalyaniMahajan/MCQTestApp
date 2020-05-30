<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Carbon\Carbon;
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
	$dt = Carbon::now();
	$starttime = $dt->toDateTimeString();
	$endtime = $dt->addHour(2);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'url_token' => Str::random(32),
        'url_token_active' => $starttime,
        'url_token_expired' => $endtime,
    ];
});
