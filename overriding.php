<?php

// property overriding
// method overriding
class base{
    public $name = 'base';

    public function show()  {
        echo 'my name : ' . $this->name;
    }
}
class child extends base{
    public $name = 'child';

    public function show()  {
        echo 'your name : ' . $this->name;
    }
}
$b1 =new child();
$b1->show();