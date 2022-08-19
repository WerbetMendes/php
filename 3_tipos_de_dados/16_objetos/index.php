<?php

class pessoa {

    function falar() {
        echo "Olá Pessoal!";
    }
}

$werbet = new pessoa();
$werbet->nome = "Werbet";
echo $werbet -> nome; 

echo"<br>";

$werbet ->falar();


?>