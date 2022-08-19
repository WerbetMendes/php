<?php

echo NULL;
$nome = NULL;

if(is_null($nome)) {
    echo "O valor é nulo!";
}

$nome = 'Werbet';
if (is_null($nome)) {
    echo "O valor não é mais nulo!";
}
