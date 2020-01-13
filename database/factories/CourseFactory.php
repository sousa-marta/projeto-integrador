<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
  return [
    'name' => $faker->catchPhrase,
    'description' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
    'duration' => 5,
    'start' => '2020-03-20',
    'end' => '2020-08-24',
    'status' => 'disponível',
    'category_id' => $faker->numberBetween($min = 1, $max = 5),  // 1 à 5 pois os seeds criados de categorias são esses no momento
    'company_id' => 1,
  ];
});
