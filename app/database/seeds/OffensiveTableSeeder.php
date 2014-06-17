<?php

class OffensiveTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('offensive')->delete();
    Offensive::create(array(
      'quote' => "Et toi, j'te baiserai bien !"
    ));
  }

}
