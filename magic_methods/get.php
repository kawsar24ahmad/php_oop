<?php

class abc{
    private $names = ['kawsar'=> 'ahmad', 'homayon'=> 'azad'];

    function __get($key)  {
        if (array_key_exists($key,$this->names)) {
            return $this->names[$key];
        }else{
            echo 'you are trying to access unexisting or private property ' .$key;
        }
        // echo 'you are trying to access unexisting or private property ' .$property;
    }

}
$obj= new abc();
echo $obj->kawsar;