<?php

class Caneta {
    public $modelo;
    private $ponta;

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }
}

    $c1 = new Caneta;
    //$c1->setModelo("BIC");
    $c1->modelo = "NIC";
    $c1->setPonta(0.5);
    print_r($c1);

