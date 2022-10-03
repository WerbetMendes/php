<?php

$cincodias = strtotime("5 days");
echo $cincodias . "<br>";

$dataAtual5 = date('d/m/y', $cincodias);
echo $dataAtual5 . "<br>";


$dataA =new DateTime();
$dataB =new DateTime();

$dataB->setDate(2001, 10, 15);

$diferenca = $dataA->diff($dataB);
print_r($diferenca) . "<br>";

//date_default_timezone_set('America/Sao_Paulo');
$data = new DateTime();
print_r($data);