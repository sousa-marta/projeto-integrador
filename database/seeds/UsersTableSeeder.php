<?php

use Illuminate\Database\Seeder;
use App\{Role, User};
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // User::truncate();

    $adminRole = Role::where('name', 'admin')->first();
    $userRole = Role::where('name', 'user')->first();

    $admin = User::create([
      'name' => 'Admin',
      'email' => 'admin@oppy.com',
      'password' => Hash::make('admin'),
      'location_id' => '1',
    ]);

    $user = User::create([
      'name' => 'User',
      'email' => 'user@user.com',
      'password' => bcrypt('user'),
      'location_id' => '2',
    ]);

    $admin->roles()->attach($adminRole);
    $user->roles()->attach($userRole);
  }
}
