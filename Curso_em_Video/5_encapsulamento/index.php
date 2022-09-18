<?php

interface Controlador {
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}

class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    private function getVolume() {
        return $this->volume;    
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
        echo "Aparelho ligado!<br><br>";
    }

    public function desligar() {
        $this->setLigado(false);
        echo "Aparelho desligado!<br><br>";
    }

    public function abrirMenu() {
        echo "---------MENU-------<br>";
        echo "<br>Está ligado? ". ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando? ". ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: ". ($this->getVolume());
        for($i = 0; $i <= $this->getVolume(); $i+=10) {
            echo "||";
        }
        echo "<br>";
    } 

    public function fecharMenu() {
        echo "Fechando Menu...";
    }

    public function maisVolume() {
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume() {
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play() {
        if($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}

$user1 = new ControleRemoto;
$user1->ligar();
$user1->abrirMenu();
$user1->play();
$user1->pause();
$user1->maisVolume();
$user1->maisVolume();
$user1->menosVolume();
$user1->maisVolume();
$user1->desligar();
print_r($user1);