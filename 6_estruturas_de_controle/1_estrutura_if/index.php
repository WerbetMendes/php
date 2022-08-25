<?php


// condição verdadeira.
if (20 > 12) {
    echo "Deu certo. Entrou no if. <br>";
}

// condição falsa. Não imprime na tela.
if (10 > 20) {
    echo "Não entrou no if.<br>";
}

// utilizando op. lógico.
if (10 == 10 && 9 > 3) {
    echo "Deu certo. Entrou no if 2. <br>";
}

// utilizando variáveis.
$a = 10;
$b = 5;

$c = "Deu certo. Entrou no if com variáveis.<br>";

if ($a > $b) {
    echo $c;
}