<?php

class Reply extends Eloquent {

  // Relationship method to retrieve the offensive from a reply
  public function offensive()
  {
    return $this->belongsTo('Offensive');
  }

}
