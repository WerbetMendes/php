<?php

// Utilizando espaço como separador.

$str = "Testando string para array.";

$arr = explode(" ", $str);

print_r($arr); 

echo "<br>";

// Utilizando a vírgula como separador.

$frase = "Convertendo, string, para, array.";

$arr2 = explode(",", $frase);

print_r($arr2);
