<?php
$x = 4;

while ($x < 31) {
    echo "$x <br>";
    if ($x == 24){
        echo "Chegamos ao final.<br>";
        break;
    }
    $x += 2;
}
