<?php

$c = 1;

while ($c <= 10) {

    if ($c == 5 || $c == 7) {
        echo "Pulando...";
        $c++;
        continue;
      
    }
    echo "$c...";
    $c++;
}