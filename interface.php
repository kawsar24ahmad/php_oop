<?php

interface A{
    function calc($a, $b);
}
interface B{
    function sub($c, $d);
}
class C implements A, B{
    public function calc($a, $b){
        echo $a + $b;
    }
    public function sub($c, $d){
        echo $c - $d;
    }
}
$obj = new C();
$obj->calc(5, 6);
echo '<br>';
$obj2 = new C();
$obj2->sub(5, 6);