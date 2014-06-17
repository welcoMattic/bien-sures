<?php

class Offensive extends Eloquent {

    // Relationship method to retrieve all replies from an offensive
    public function replies()
    {
        return $this->hasMany('Reply');
    }

}
