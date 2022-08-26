<?php

$a = "Werbet";
$b = 34;
$c = false;

if (is_int($a)) {
    echo "Sim. A é do tipo inteiro.<br>";
} else {
    echo "Não. A não é do tipo inteiro.<br>";
}

if (is_int($b)) {
    echo "Sim. A variável B é do tipo inteiro.<br>";
} else {
    echo "Não. A variável B não é do tipo inteiro.<br>";
}

if (is_int($c)) {
    echo "Sim. A variável C é do tipo inteiro.<br>";
} else {
    echo "Não. A variável C não é do tipo inteiro.<br>";
}

echo "<br>";
echo "<br>";

echo "A variável A é do tipo ". gettype($a). ".";
echo "<br>";
echo "A variável B é do tipo ". gettype($b). ".";
echo "<br>";
echo "A variável C é do tipo ". gettype($c). ".";
echo "<br>";