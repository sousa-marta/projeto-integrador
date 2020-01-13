<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call(SupportsTableSeeder::class);
    $this->call(CategoriesTableSeeder::class);
    $this->call(LocationsTableSeeder::class);
    $this->call(RolesTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(CompaniesTableSeeder::class);
    $this->call(VacanciesTableSeeder::class);
    $this->call(CoursesTableSeeder::class);
  }
}
