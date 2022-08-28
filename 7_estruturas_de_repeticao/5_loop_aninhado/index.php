<?php
$c = 1;

while ($c <= 10) {
    echo "Loop externo $c <br>";

    //segundo contador
    $j = 0;

    while ($j <= 5) {
        echo "Loop interno $j <br>";
        $j++;
    }
    
    $c++;
}