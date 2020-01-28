<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolunteersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('volunteers')->insert([
    ['name' => "Angelina Jolie",
    'picture' => 'angelina.jpeg',
    'birth_date' => "1975-06-04",
    'email' => "angelina@jolie.com",
    'phone' => "+1 555 1579-524",
    'address' => "Newbridge St.",
    'address_number' => 585,
    'complement' => '',
    'zip' => "20705",
    'city' => "Beltsville",
    'state' => "MD",
    'location_id' => 70]
    ]);
  }
}
