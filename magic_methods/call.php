<?php

class student{
    private $firstName;
    private $lastName;

    private function setName($f, $l){
        $this->firstName = $f;
        $this->lastName = $l;
    }

    function __call($method, $args) {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        } else {
            echo 'this does not exists : '.$method;
        }
        
        // echo 'this is not existing or private method : '. $method;
        // print_r($args);
    }
}
$obj = new student();
// $obj->say();
$obj->setName('kawsar', 'ahmad');
print_r($obj);