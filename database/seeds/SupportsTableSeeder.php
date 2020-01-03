<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('supports')->insert([
      ['type' => 'jurídico'],
      ['type' => 'psicológico'],
      ['type' => 'profissional'],
    ]);
  }
}
