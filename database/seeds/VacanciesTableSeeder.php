<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacanciesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('vacancies')->insert([
      ['name' => "Professores Full Stack",
      'phone' => "(11) 5789-2461",
      'email' => "contato@dh.com",
      'city' => "São Paulo",
      'description' => "Buscamos profissionais com experiência em sala de aula e pelo menos 2 anos de experiência profissional programando em PHP.",
      'wage' => 5000,
      'status' => 'aberta',
      'company_id' => 1,
      'category_id' => 3,],
      ['name' => "Camareira(o)",
      'phone' => "(31) 2496-1573",
      'email' => "contato@hotel.com",
      'city' => "Belo Horizonte",
      'description' => "Venha trabalhar em um hotel 5 estrelas! Precisamos de pessoas com vontade de trabalhar duro e dar o seu melhor. Não precisa ter experiência.",
      'wage' => 1900,
      'status' => 'aberta',
      'company_id' => 2,
      'category_id' => 1,],
      ['name' => "Cabeleireira(o)",
      'phone' => "(21) 5789-2461",
      'email' => "contato@salao.com",
      'city' => "Rio de Janeiro",
      'description' => "Precisamos de pessoa com experiência em corte a seco de cabelos crespo e cacheado. Nosso salão só usa produtos naturais e sem química. Entre em contato para marcarmos uma conversa.",
      'wage' => 3500,
      'status' => 'aberta',
      'company_id' => 3,
      'category_id' => 3,]
    ]);
  }
}
