<?php

trait test{
    private function sayHellow() {
        echo "hellow from trait \n";
    }
}
class base{
  use test{
    test::sayHellow as public newhellow;
  }
}

$obj = new base();
$obj->newhellow();
