<?php

class Caneta {
    public $modelo;
    public $cor = "Azul";
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if ($this->tampada == true){
            echo "ERRO! Não posso rabiscar!";
        } else {
            echo "Estou rabiscando";
        }
    }

    private function tampar() {
        $this->tampada == true;
    }

    private function destampar() {
        $this->tamapada == false;
    }
}

$ureplus = new Caneta;

$ureplus->rabiscar();