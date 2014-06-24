<?php

class UserTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('users')->delete();
    User::create(array(
      'username' => 'mathieu',
      'password' => Hash::make('password'),
    ));
    User::create(array(
      'username' => 'valentine',
      'password' => Hash::make('password'),
    ));
    User::create(array(
      'username' => 'aurelien',
      'password' => Hash::make('password'),
    ));
    User::create(array(
      'username' => 'mikael',
      'password' => Hash::make('password'),
    ));
    User::create(array(
      'username' => 'armony',
      'password' => Hash::make('password'),
    ));
  }

}
