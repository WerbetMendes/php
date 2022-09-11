<?php

$nome = "aranha";
$patas = 8;
$corpo = "peludo";
$status = "venenosa";

$arr = compact("nome", "patas", "corpo", "status");

foreach($arr as $caracteristica => $value){
    echo "$caracteristica: $value<br>";
}

