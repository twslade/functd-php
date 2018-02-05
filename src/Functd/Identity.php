<?php

namespace Functd;

class Identity extends Monad {

    public function bind($fn){
        if($this->_value){
            return static::create($fn($this->_value));
        } else {
            return static::create(null);
        }
    }
}