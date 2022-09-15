<?php

class Cachorro {
    function latir() {
        echo "Au! Au! Au!";
    }
    function andar($m) {
        echo "O cachorro andou $m metros.";
    }
}

$pluto = new Cachorro;
$pluto->latir();
$pluto->andar(3);