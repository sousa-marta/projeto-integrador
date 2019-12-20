<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('categories')->insert([
      ['name'=>"Hotelaria", 'img'=>"/img/courses-g-hospitality.jpg"],
      ['name'=>"Idiomas", 'img'=>"/img/courses-g-languages.jpg"],
      ['name'=>"Programação", 'img'=>"/img/courses-g-programming.jpg"],
      ['name'=>"Saúde", 'img'=>"/img/courses-g-health.jpg"],
      ['name'=>"Beleza", 'img'=>"/img/courses-g-beauty.jpg"]
    ]);
  }
}
