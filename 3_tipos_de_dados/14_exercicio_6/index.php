<?php

$carro = ['marca'=>'Ford','modelo'=>'Focus','cor'=>'Vermelho', 'teto solar'=>'true'];
echo $carro['cor'];
echo"<br>";
echo $carro['modelo'];
echo "<br>";
print_r ($carro);


echo"<br>";
$marca = $carro['marca'];
$modelo = $carro['modelo'];
echo "O carro é da marca <strong>$marca</strong> e o modelo é <strong>$modelo</strong>."
//Nada impede de criar uma nova variável para receber uma posição do array.
?>