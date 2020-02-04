<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('courses')->insert([
      ['name' => "Recepcionista",
      'description' => "Curso completo de recepcionista, pratique tanto habilidades pessoais quanto aprenda a mexer nos softwares mais utilizados nessa área.",
      'duration' => 6,
      'start' => '2020-05-22',
      'end' => '2020-11-22',
      'status' => 'disponível',
      'category_id' => 1,
      'company_id' => 2],
      ['name' => "Cuidador de Idosos",
      'description' => "Nesse curso extensivo semi-presencial serão abordados primeiros-socorros e psicologia.",
      'duration' => 12,
      'start' => '2020-06-13',
      'end' => '2021-06-22',
      'status' => 'disponível',
      'category_id' => 4,
      'company_id' => 3],
      ['name' => "Programação Back-end",
      'description' => "Curso completo de programação back-end com ensino das seguintes linguagens: PHP, Java e Go.",
      'duration' => 10,
      'start' => '2020-02-20',
      'end' => '2020-12-20',
      'status' => 'disponível',
      'category_id' => 3,
      'company_id' => 1],
      ['name' => "Hidratação Capilar",
      'description' => "Curso prático que ensina diferentes tipos de hidratação capilar para cada tipo de cabelo.",
      'duration' => 2,
      'start' => '2020-04-05',
      'end' => '2020-06-05',
      'status' => 'disponível',
      'category_id' => 5,
      'company_id' => 3],
      ['name' => "Espanhol",
      'description' => "Curso intensivo de espanhol para Hotelaria, com foco em conversação e conteúdo voltado à business.",
      'duration' => 8,
      'start' => '2020-03-10',
      'end' => '2020-11-10',
      'status' => 'disponível',
      'category_id' => 2,
      'company_id' => 4],
      ['name' => "Inglês",
      'description' => "Curso intensivo de inglês, com turmas desde iniciante até avançado, com opções de aulas online ou in company.",
      'duration' => 9,
      'start' => '2020-02-22',
      'end' => '2020-11-22',
      'status' => 'disponível',
      'category_id' => 2,
      'company_id' => 4]
    ]);
  }
}
