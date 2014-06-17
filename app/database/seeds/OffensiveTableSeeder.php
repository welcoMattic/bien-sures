<?php

class OffensiveTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('offensives')->delete();
    Offensive::create(array(
      'quote'       => "Et toi, j'te baiserai bien !",
      'description' => "Un jeune homme vous aborde de loin dans la rue, vous passez ensuite devant lui."
    ));
  }

}
