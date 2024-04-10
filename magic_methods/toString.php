<?php

class abc{
public function __construct() {
    echo get_class($this);
}
    function __toString()  {
        return 'you cant print object';
    }
}
$obj = new abc();

