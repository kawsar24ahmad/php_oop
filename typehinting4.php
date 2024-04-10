<?php

class student{
    function names()  {
        return ['hasan', 'rahat', 'mir'];
    }
}
class library{
    
}
class school{
    function getNames(student $names ) {
        foreach ($names->names() as $name) {
            echo $name . '<br>';
        }
    }
}
$stu = new student();
$scl = new school();
$lib = new library();

$scl->getNames($lib);
