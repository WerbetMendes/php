<?php

$str = "Estamos testando a função strpos. Com essa função podemos encontrar strings. <br>";

$teste = strpos($str, "strpos");

echo $teste."<br>";


//Palavra não encontrada

$teste = strpos($str, "Java");
if($teste === false) {
    
echo "Palavra não encontrada";
}

