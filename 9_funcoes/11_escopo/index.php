<?php
$a = 10;
$b = 12;

function testeEscopo() {
    $a = 5;

    $a++;

    global $b;

    $b++;

    static $c = 0; // Static a variável vai aumentando de valor cada vez que é impressa. 
    $c++;

    echo "Escopo LOCAL de A é: $a <br>";
    echo "Escopo GLOBAL de B é: $b <br>";
    echo "Escopo STATIC de C é: $c <br>";
}

echo "Escopo GLOBAL de A é: $a <br>";
echo "Escopo GLOBAL inicial de B é: $b<br>";
testeEscopo();
testeEscopo();

