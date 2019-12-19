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
      ['name'=>"Hotelaria", 'img'=>"caminhoImagemHotelaria"],
      ['name'=>"Idiomas", 'img'=>"caminhoImagemIdiomas"],
      ['name'=>"Programação", 'img'=>"caminhoImagemProgramação"],
      ['name'=>"Saúde", 'img'=>"caminhoImagemSaúde"],
      ['name'=>"Beleza", 'img'=>"caminhoImagemBeleza"]
    ]);
  }
}
