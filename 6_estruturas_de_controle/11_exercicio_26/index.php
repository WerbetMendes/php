<?php

$vel = 41;

if ($vel > 40) {
    echo "Você ultrapassou o limite de velocidade e foi multado!. <br>";
} else if ($vel == 40) {
    echo "Tome cuidado! Sua velocidade está no limite. <br>";
} else {
    echo "Você está dentro da velocidade permitida!<br>";
}