<?php

function alteraDados($nome, $idade) {

    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];
}

$dados = alteraDados("Werbet", 39);
print_r ($dados);

echo "<br>";

echo "Olá $dados[0], você tem a idade de $dados[1].";

