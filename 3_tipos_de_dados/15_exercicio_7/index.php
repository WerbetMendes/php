<?php

$pes = ['sexo'=> 'M', 'idade'=> 39, 'cor' => 'pardo', 'estado civil'=> 'casado'];

if($pes['idade'] > 18){
    echo "A pessoa é maior de idade.";
}
echo "<br>";
echo "OU";
echo "<br>";
$maioridade = 18;
if($pes['idade'] > $maioridade) {
    echo "A pessoa é maior de idade.";
}


?>