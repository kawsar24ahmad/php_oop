<?php

$a = 5;
$b = & $a; // copy by referance
// $b = $a; // copy by value
$b =10;
echo $a;

// object clone 
class student{
    public $name;
    public $course;
    public function __construct($n) {
        $this->name = $n;
    }
    function  setCourse(course $c) {
        $this->course = $c;
    }
    function __clone() {
        $this->course = clone $this->course ;
    }
}
class course{
    public $cname;
    public function __construct($cn) {
        $this->cname = $cn;
    }
}
$stu1 = new student('kawsar');
$crs1 = new course('Php');
$stu1->setCourse($crs1);
$stu2 = clone $stu1;
$stu2->name = 'rahat';
// echo $stu1->name;
// echo $stu2->name;


$stu2->course->cname = 'python';
echo '<pre>';
print_r($stu1);
print_r($stu2);
echo '</pre>';
