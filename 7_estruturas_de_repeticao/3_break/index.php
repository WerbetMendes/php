<?php

$x = 0;

while ($x < 11) {
    echo "O X é $x <br>";

    if ($x == 5) {
        echo "Terminando o looping.<br>";
        break;
    }
    $x++;
}