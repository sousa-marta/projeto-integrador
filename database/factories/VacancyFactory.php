<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vacancy;
use Faker\Generator as Faker;

$factory->define(Vacancy::class, function (Faker $faker) {
  return [
    'name' => $faker->jobTitle,
    'phone' => $faker->tollFreePhoneNumber,
    'email' => $faker->safeEmail,
    'city' => $faker->city,
    'description' => $faker->text,
    'wage' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 70000),
    'status' => 'ativa',
    'company_id' => 1,
    'category_id' => 1,
  ];
});
