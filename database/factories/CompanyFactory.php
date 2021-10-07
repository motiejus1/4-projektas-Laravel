<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Company::class, function (Faker $faker) {
    return [
        "name" => $faker->name(),
        "type" => Str::random(10),
        "description" => $faker->sentence(12)
    ];
});
