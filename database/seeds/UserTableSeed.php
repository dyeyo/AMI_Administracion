<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{

  public function run()
  {
    User::create([
      'name' => 'admin',
      'email' => 'admin@admin.com',
      'password' => bcrypt('12345678'),
      'role' => 1
    ]);

    User::create([
      'name' => 'asesor',
      'email' => 'asesor@asesor.com',
      'password' => bcrypt('12345678'),
      'role' => 2
    ]);
  }
}
