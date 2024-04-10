<?php
class person{
    public $name;

    function show(){
        echo 'Your Name is :'. $this->name;
    }
}

$p1 = new person();
$p1->name= 'kawsar';
$p1->show();

$p2 = new person();
$p2->name= 'Hasan';
$p2->show();