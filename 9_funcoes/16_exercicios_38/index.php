<?php

$lista = ["Arroz", "Trigo", "Açúcar", "Manteiga", "Leite"];

function listaParaString($arr) {
    $str = "Você levou estes itens do mercado: ";

    for($i = 0; $i < count($arr); $i++) {

        $str .= "$arr[$i], ";
    }

    return $str;
}

echo listaParaString($lista);