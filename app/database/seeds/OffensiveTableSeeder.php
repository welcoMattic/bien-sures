<?php

class OffensiveTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('offensives')->delete();
    Offensive::create(array(
      'quote'       => "Et toi, j'te baiserai bien !",
      'description' => "Un jeune homme vous aborde de loin dans la rue, vous passez ensuite devant lui.",
      'typology_id' => 2
    ));
    Offensive::create(array(
      'quote'       => "Mime d'une fellation",
      'description' => "Vous passez devant un groupe de jeunes hommes, l'un d'eux vous agresse",
      'typology_id' => 1
    ));
  }

}
