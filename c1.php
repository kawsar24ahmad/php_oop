<?php

class calculation{
    public $a, $b, $c;
    
    function sum() {
        $this->c =$this->a + $this->b;
        return $this->c;
    }
    function sub() {
        $this->c =$this->a - $this->b;
        return $this->c;
    }
}
$cl1 = new calculation();
$cl1->a = 20;
$cl1->b = 10;
// echo $cl1->sub();

$cl2 = new calculation();
$cl2->a = 30;
$cl2->b = 10;
echo $cl2->sum();
