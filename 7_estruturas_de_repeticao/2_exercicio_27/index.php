<?php

$a =["teste", 25, "Paul", false, 56.3, "Werbet", 900, 26.4, true, 45];

$x = count($a);

$y = 0;

while ($y < $x ) {

    if (is_string($a[$y])) {
        echo $a[$y] . "<br>";
    }

    $y++;
}