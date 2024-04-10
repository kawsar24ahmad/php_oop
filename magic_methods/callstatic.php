<?php
class abc{
    private static function hello() 
    {
      echo 'hello';    
    }

    public static function __callstatic($method, $args)
    {
        if (method_exists(__CLASS__, $method)) {
            call_user_func_array([__CLASS__, $method], $args);
        } else {
            echo 'this is non existing or private method : '.  $method;  
        }
        
        // echo 'this is non existing or private property : '.  $property;   
    }
}
echo abc::hello1();