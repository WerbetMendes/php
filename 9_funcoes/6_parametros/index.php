<?php

function velocidadeMaxima($vel){

    echo "O carro atinge a velocidade máxima de $vel km/h.<br>";
}


velocidadeMaxima(100);

//OU também podemos passar um determinado valor de uma variável.

echo "Teste continuando... <br>";

$velocidade = 125;

velocidadeMaxima($velocidade);

// PHP ignora parâmetro desnecessário.
velocidadeMaxima(250, "teste");