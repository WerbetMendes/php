<?php

$arr = [ 
    "Werbet"=> 39,
    "André"=> 16,
    "Maria"=> 35,
    "Paulo"=> 12
];

asort($arr);
print_r($arr);

echo "<br>";

ksort($arr);
print_r($arr);