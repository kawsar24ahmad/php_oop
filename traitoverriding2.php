<?php

trait test{
    public function sayHellow() {
        echo "hellow from trait \n";
    }

}
trait test2{
    public function sayHellow() {
        echo "hellow from trait test2 \n";
    }

}

class base{
  use test, test2{
    test2::sayHellow insteadOf test;
    test::sayhellow as newHello;
  }
}

$obj = new base();
$obj->sayHellow();
$obj->newHello();