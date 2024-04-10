<?php
class person{
    public $name,  $age;
    
    public function __construct($n = 'no name', $a = 0) {
        $this->name = $n;
        $this->age = $a;
    }

    function show(){
        echo 'Your Name is :'. $this->name . '<br>';
        echo 'Your age is :'. $this->age . '<br>';
    }
}

$p1 = new person('kawsar', 33);
$p1->show();

// $p2 = new person('Hasan');
// $p2->show();
// $p3 = new person('rashed');
// $p3->show();

// $p4 = new person('mahdi');
// $p4->show();