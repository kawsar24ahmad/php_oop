<?php

class calc{
    public $a, $b;


    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
        echo __FUNCTION__;
        echo __line__;
        echo __file__;
        echo __dir__;
    }
    function __invoke()  {
        echo $this->a +  $this->b;
        echo __FUNCTION__;
    }
}
$obj = new calc(20, 30);
$obj();