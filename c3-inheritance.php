<?php

class employe{
    public $name, $age, $salary;
    public function __construct( $n, $a, $s ) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    public function show()  {
        echo 'name : ' . $this->name . ' age : ' .  $this->age .' salary : ' .  $this->salary;
    }
}
class manager extends employe{
    
}
$e1 = new employe('kawsar',30,9000);
$e1->show();

$e2 = new manager('jiri',40,15000);
$e2->show();