<?php

$casa = [
'Sofá' => 200, 
'Cafeteira' => 40, 
'Microoondas' => 100, 
'Prato' => 6, 
'Copo' => 4, 
'Colher' => 1 
];

function itensCaros($casa) {

    $arrItensCaros = [];

    foreach($casa as $item => $preco) {

        if($preco > 10) {

         array_push($arrItensCaros, $item);

        }
    }

    return $arrItensCaros;

}

$novoArr = itensCaros($casa);

print_r($novoArr);
