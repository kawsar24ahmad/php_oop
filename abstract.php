<?php

abstract class A{
    protected $name;
    abstract function show($a, $b);
}
class B extends A{
    public function show($a, $b) {
        echo $a . $b;
    }
}
$myName = new B();
$myName->show('kawsar ', 'ahmad');