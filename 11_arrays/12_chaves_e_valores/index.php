<?php

$carro = [
    "marca" => "Honda",
    "motor" => "2.4",
    "teto-solar" => true,
    "câmbio" => "Manual",
    "portas" => 4
];

$chaves = array_keys($carro);
print_r($chaves);
echo "<br>";

$valores = array_values($carro);
print_r($valores);