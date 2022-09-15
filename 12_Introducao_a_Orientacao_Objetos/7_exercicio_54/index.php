<?php

class Pessoa {
    public $nome = "Werbet";
    public $idade = 39;

    function andar($m){
        echo " andou hoje $m metros.<br>";
    }
}

$cidadao = new Pessoa;
echo $cidadao->nome;
echo $cidadao->andar(25);
echo "O nome dele é $cidadao->nome e tem a idade de $cidadao->idade anos.";

