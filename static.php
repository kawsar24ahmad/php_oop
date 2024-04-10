<?php

class A{
    public static $name = 'kawsar ahmad';

    public static function show(){
        echo self::$name;
    }
    public function __construct() {
        self::show();
    }
}
// echo A::$name;
// A::show();

// class B extends A {
//     public function show(){
//         echo parent::$name;
//     }
// }

$obj = new A();
// $obj->show();