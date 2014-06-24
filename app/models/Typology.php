<?php

class Typology extends Eloquent {

  // Relationship method to retrieve all offenives from a typology
  public function offensives()
  {
    return $this->hasMany('Offensive');
  }

}
