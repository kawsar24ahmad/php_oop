<?php

class student{
    private $name;
    

    function __set($property,$value)  {
        if (property_exists($this, $property)) {
             $this->$property = $value;
        } else {
            echo 'you are trying to set private or un existing property :' . $property;
        }
        
        // echo 'you are trying to set private or un existing property :' . $property;
    }
    function show()  {
        echo $this->name;
    }
}

$obj=new student();
$obj->name = 'kawsar';
$obj->show();