<?php

class abc{
    private $name = 'kawsar';

    function __unset($property)  {
        unset($this->$property);
    }
}
$obj = new abc();
unset($obj->name);