<?php

trait test{
    public function sayHellow() {
        echo "hellow \n";
    }
    public function sayhi() {
        echo 'hi everyone \n';
    }
}
trait test2{
    public function  bye(){
        echo 'bye bye ta ta';
    }
}
class A{
    use test, test2;
}
class B{
    use test;
}
$obj =new A();
$obj->sayHellow();
$obj->sayHi();
$obj->bye();
