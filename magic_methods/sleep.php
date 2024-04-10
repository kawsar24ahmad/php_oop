<?php

class abc{
    public $name = 'kawsar';
    public $course = 'php';

    public function __sleep() {
        return array('name');
    }
}
$obj = new abc();
$srl = serialize($obj);
$us = unserialize($srl);
print_r($us);