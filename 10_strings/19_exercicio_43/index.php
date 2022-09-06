<?php

$frase = "carro - navio - helicóptero - barco - jangada";

$arr = explode("-", $frase);

for($i = 0; $i < count($arr); $i++) {
    echo "Item: $arr[$i]<br>";

}

