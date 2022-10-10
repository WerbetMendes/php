<?php
require_once "Animal.php";

class Mamifero extends Animal {
    private $corPelo;

    public function locomover() {
        echo "<p>Mamífero correndo...</p>";
    }
    public function alimentar() {
        echo "<p>Mamífero está mamando...</p>";
    }
    public function emitirSom() {
        echo "<p>Som de mamífero...</p>";
    }

    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

}
