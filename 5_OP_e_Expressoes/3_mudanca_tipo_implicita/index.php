<?php

echo 5 /2;
echo "<br>";

if(is_float(5/2)) {
    echo "Yes! It's float.";
}

echo "<br>";
echo 2 . 3;
echo "<br>";

if(is_string(2 . 3)) {
    echo "Yes! It's string.";
}

echo "<br>";

$nome = "Werbet";
$sobrenome = "Mendes";

$nomecompleto = $nome . " " . $sobrenome;
echo $nomecompleto;


?>

