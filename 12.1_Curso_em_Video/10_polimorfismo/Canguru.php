<?php
require_once "Mamifero.php";

class Canguru extends Mamifero {
    public function usarBolsa() {
        echo "<p>Canguru usa bolsa.</p>";
    }
    public function locomover() {
        echo "<p>Canguru saltando...</p>";
    }
    public function emitirSom() {
        echo "<p>Canguru emitindo som.</p>";
    }
}