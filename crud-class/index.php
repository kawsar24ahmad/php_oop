<pre>

<?php

include 'database.php';

$obj = new database();

// $obj->insert('students', ['sname'=> 'mohsin', 'age'=> 39, 'city'=>'kishorgong']);
// print_r($obj->getResult());

// $obj->update('students', ['sname'=> 'khaled', 'age'=> 9, 'city'=>'maihdee'], 'id= "5"');
// echo 'update result is : ';
// print_r($obj->getResult());

// $obj->delete('students', 'id= "5"');
// echo 'delete result is : ';
// print_r($obj->getResult());

// $obj->sql('SELECT * FROM students');
// echo 'sql result is : ';
// print_r($obj->getResult());

$obj->select('students', '*', null,null, null, 2);
echo 'select result is : ';
print_r($obj->getResult());

$obj->pagination('students',null, null, 2);
?>

</pre>