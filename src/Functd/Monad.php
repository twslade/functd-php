<?php

namespace Functd;

class Monad {
    protected $_value;

    public function __construct($value){
        $this->_value = $value;
    }

    public static function create($value){
        return new static($value);
    }

    public function value(){
        if($this->_value instanceof self) {
            return $this->_value->value();
        }
        return $this->_value;
    }
}