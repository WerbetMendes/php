<?php

$compras = ["batata", "maçã", "pêra", "feijão", "arroz"];

$removidos = array_splice($compras, 2, -1);

print_r($removidos);

echo "<br>";

print_r($compras);