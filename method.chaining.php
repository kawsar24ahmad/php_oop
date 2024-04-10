<?php

class test{
    function first() {
        echo 'from first';
        return $this;
    }
    function sec() {
        echo 'from sec';
        return $this;

    }
    function third() {
        echo 'from third';
        return $this;

    }
}
$obj = new test();
$obj->first()->sec()->third();