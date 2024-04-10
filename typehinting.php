<?php

function sum(int $v)  {
    echo $v + 10 ;
}

// sum('hel');

function fruits(array $names)  {
    foreach ($names as $name) {
        echo $name . '<br>';
    }
}
$fruitsName =['apple', 'mango', 'jam'];
$test = 'test';
fruits($test );