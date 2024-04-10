<?php


class base{
    public static $name = 'kawsar';

    public function show()  {
        echo static::$name;
        echo self::$name;
    }
}
class child extends base{
    public static $name = 'ahmod';

}
$obj = new child();
$obj->show();