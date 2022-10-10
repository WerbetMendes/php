<?php
require_once "Animal.php";
class Peixe extends Animal {
    private $corEscama;

    public function locomover() {
        echo "<p>Peixe nadando...</p>";
    }
    public function alimentar() {
        echo "<p>Comendo algas</p>";
    }
    public function emitirSom() {
       echo "<p>Peixes não emitem sons...</p>"; 
    }
    public function soltarBolha() {
        echo "<p>Soltou uma bolha</p>";
    }
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}