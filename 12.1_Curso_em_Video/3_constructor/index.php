<?php

class Caneta{
    public $modelo;
    public $cor;
    public $ponta;
    private $tampada;

    public function __construct() {
        $this->modelo = "Bic";
        $this->cor = "Azul";
        $this->tampar();
       }

    public function tampar(){
        $this->tampada = true;
    }
}

$c1 = new Caneta;
print_r($c1);