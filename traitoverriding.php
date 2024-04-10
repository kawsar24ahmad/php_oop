<?php

trait test{
    public function sayHellow() {
        echo "hellow from trait \n";
    }

}

class base{
    public function sayHellow() {
        echo "hellow from base \n";
    }
}
class derived extends base{
    // use test;
    // public function sayHellow() {
    //     echo "hellow from derived \n";
    // }
}
$obj = new derived();
$obj->sayHellow();