<?php

class TypologyTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('typologies')->delete();
    Typology::create(array(
      'name' => "Gestes vuglaires"
    ));
    Typology::create(array(
      'name' => "Remarques sexistes"
    ));
  }

}
