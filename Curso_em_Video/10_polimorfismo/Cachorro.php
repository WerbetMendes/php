<?php
include_once "Mamifero.php ";
class Cachorro extends Mamifero {
    private $corPelo;

    public function roerOsso() {
        echo "<p>Cachorro roendo osso.</p>";
    }

    public function emitirSom() {
        echo "<p>Au! Au! Au! Au!</p>";
    }
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

    


}