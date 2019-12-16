<?php

namespace App\Services;

use App\Vacancy;

class VacancyCreator
{
  public function createVacancy($name, $phone, $email, $description, $wage, $state, $company_id, $location_id, $category_id)
  {
    $vacancy = Vacancy::create(['name' => $name,'phone' => $phone, 'email' => $email, 'description' => $description, 'wage' => $wage, 'state' => $state]);
    for ($i = 1; $i <= $category_id; $i++) {
      $vacancy->categories()->create(['category' => $i]);
      $vacancy->location()->create(['location' => $location_id]);
      $vacancy->company()->create(['company' => $company_id]);
    }

    return $vacancy;
    var_dump($vacancy);
  }
}