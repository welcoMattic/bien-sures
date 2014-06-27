<?php

class TypologyTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('typologies')->delete();
    Typology::create(array(
      'name' => "Regards concupiscents"
    ));
    Typology::create(array(
      'name' => "Sifflements"
    ));
    Typology::create(array(
      'name' => "Bruits de baiser"
    ));
    Typology::create(array(
      'name' => "Coups de klaxons"
    ));
    Typology::create(array(
      'name' => "Commentaires sur l’apparence physique"
    ));
    Typology::create(array(
      'name' => "Gestes vulgaires"
    ));
    Typology::create(array(
      'name' => "Exhibitions sexuelles"
    ));
    Typology::create(array(
      'name' => "Frotteurisme"
    ));
  }

}
