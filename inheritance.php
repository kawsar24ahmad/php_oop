<?php

class employe{
    public $name, $age, $salary;
    public function __construct( $n, $a, $s ) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    public function show()  {
        echo '<h3>Employe Profile</h3>';
        echo 'employe name : ' . $this->name . ' employe age : ' .  $this->age .'employe salary : ' .  $this->salary;
    }
}
class manager extends employe{
    public $tea = 1000;
    public $call = 300;
    public $totalSalary;
    

    public function show()  {
        $this->totalSalary = $this->salary +$this->tea + $this->call; 
        echo '<h3>Manager Profile</h3>';
        echo 'manager name : ' . $this->name . ' manager age : ' .  $this->age .'manager salary : ' .  $this->totalSalary;
    }

}
$e1 = new employe('kawsar',30,9000);
$e1->show();

$e2 = new manager('Mofti Khaled',40,15000);
$e2->show();