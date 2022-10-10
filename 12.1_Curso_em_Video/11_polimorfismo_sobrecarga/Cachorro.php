<?php
require_once "Lobo.php";
class Cachorro extends Lobo {
    public function emitirSom() {
     echo "<p>Au! Au! Au! Au!</p>";
    }
    public function reagirFrase($frase) {
        if($frase == "toma comida" || $frase == "Olá!") {
            echo "<p>Cachorro abanando o rabo...</p>";
        } else {
            echo "<p>Cachorro está rosnando...</p>";
        }
    }

    public function reagirHora($hora, $min) {
        if($hora < 12) {
            echo "<p>Abanar!<p>";
        } else if ($hora >= 18) {
            echo "<p>Ignorar!</p>";
        } else {
            echo "<p>Abanar e latir.</p>";
        }
    }

    public function reagirDono($dono) {
        if($dono) {
            echo "<p>Abana o rabo por causa do dono.</p>";
        } else {
            echo "<p>Cachorro rosna e late porque não é o dono.</p>";
        }
    }

    public function reagirIdade($idade, $peso) {
        if($idade < 2) {
            echo "<p>Cachorro grunindo por causa da idade</p>";
        }
    }

}