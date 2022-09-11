<?php

$arr = [
    "nome" => "Werbet",
    "idade" => 39,
    "cor" => "pardo"
];

if(array_key_exists("telefone", $arr)){
    echo "Sim. A chave citada existe no array.<br>";
} else {
    echo "Não. A chave citada não existe no array.<br>";
}

//Utilizando isset

if(isset($arr["profissao"])) {
    echo "Sim. A chave 2 citada existe no array.<br>";
} else {
    echo "Não. A chave 2 citada não existe no array.<br>";
};
