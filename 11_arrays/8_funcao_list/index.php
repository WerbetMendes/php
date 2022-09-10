<?php

$pessoa = ["Werbet", 39, "Programador", "Baixo"];

print_r($pessoa);
echo"<br>";

list($nome, $idade, $profissao, $estatura) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";