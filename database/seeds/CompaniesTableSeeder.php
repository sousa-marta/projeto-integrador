<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('companies')->insert([
    ['name' => "Digital House",
    'logo' => 'dh.png',
    'description' => "Um hub onde o mercado digital acontece: aulas dinâmicas e com conteúdo atualizado, além de eventos para atualização constante e networking com key players.",
    'POC' => "Maria da Silva",
    'phone' => "11 5789-2461",
    'email' => "contato@dh.com",
    'address' => "Av. Dr. Cardoso de Melo",
    'address_number' => 90,
    'complement' => '',
    'zip' => "15784-572",
    'city' => "São Paulo",
    'state' => "SP",
    'location_id' => 32],
    ['name' => "Hotel Fasano",
    'logo' => 'fasano.jpeg',
    'description' => "O Hotel Fasano Belo Horizonte, localizado no bairro de Lourdes, levou para a capital mineira a personalidade e a excelência do Grupo, reconhecido internacionalmente como sinônimo de qualidade e serviços impecáveis.",
    'POC' => "João Souza",
    'phone' => "31 2496-1573",
    'email' => "contato@hotel.com",
    'address' => "Rua São Paulo",
    'address_number' => 2320,
    'complement' => '',
    'zip' => "59762-225",
    'city' => "Belo Horizonte",
    'state' => "MG",
    'location_id' => 32],
    ['name' => "Mônica Felix Estúdio",
    'logo' => 'salao.jpeg',
    'description' => "Especialista em cabelos crespos e cacheados, cortes a seco, hidratações naturais e até veloterapia.",
    'POC' => "Mônica Felix",
    'phone' => "21 5789-2461",
    'email' => "contato@salao.com",
    'address' => "Praia de Botafogo",
    'address_number' => 316/636,
    'complement' => '',
    'zip' => "36751-110",
    'city' => "Rio de Janeiro",
    'state' => "RJ",
    'location_id' => 32],
    ['name' => "CNA",
    'logo' => 'cna.jpeg',
    'description' => "O CNA é uma das maiores redes de escolas de idiomas do país. Estamos em busca de profissionais que aceitem novos desafios e acreditem possuir um diferencial a fim de contribuir com resultados positivos, visando seu crescimento profissional em nossa empresa.",
    'POC' => "Samuel Jackson",
    'phone' => "11 5678-1210",
    'email' => "contato@cna.com",
    'address' => "Av. Paulista",
    'address_number' => 2199,
    'complement' => '11 andar',
    'zip' => "57921-571",
    'city' => "São Paulo",
    'state' => "SP",
    'location_id' => 32]
    ]);
  }
}
