<?php

function defineCorCarro($cor = "Vermelha") {
    return "A cor do carro é: $cor. <br>";
    
}

$carrovermelho = defineCorCarro(); //Setou o parâmetro default: "Vermelha".
echo $carrovermelho;

$carroazul = defineCorCarro("Azul");
echo $carroazul;