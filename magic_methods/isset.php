<?php

class student{
    private $name;

    function setName($n)
    {
        $this->name = $n;
    }
    function __isset($property) {
        echo isset($property);
    }
    
}
$obj = new student();
$obj->setName('kawsar');

echo isset($obj->name);