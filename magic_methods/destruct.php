<?php

class abc{
    public function __construct() {
        echo 'from construct';
    }
    public function __destruct() {
        echo 'from destruct';
    }
  
    function hello()  {
        echo 'from hello';
        
    }
}
$obj = new abc();
$obj->hello();
$obj->hello();
$obj->hello();
$obj->hello();