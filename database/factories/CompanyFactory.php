<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
  return [
    'name' => $faker->name,
    'logo' => 'dh.png',
    'description' => $faker->text,
    'POC' => $faker->name,
    'phone' => $faker->tollFreePhoneNumber,
    'email' => $faker->safeEmail,
    'address' => $faker->streetName,
    'address_number' => $faker->buildingNumber,
    'complement' => $faker->secondaryAddress,
    'zip' => $faker->postcode,
    'city' => $faker->city,
    'state' => $faker->stateAbbr,
    'location_id' => 1,
  ];
});
