<?php

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2) {
        if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar() {
        if($this->getAprovada() == true) {
           $this->desafiado->apresentar();
           $this->desafiante->apresentar();
           $vencedor = rand(0, 2);
        switch($vencedor) {
            case 0: 
                echo "<p>Empatou!</p>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            case 1:
                echo "<p>".($this->desafiado->getNome()). " venceu!</p>";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                break;
            case 3:
                echo "<p>".($this->desafiante->getNome()). " venceu! </p>";
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();
                break;
        }
        } else {
            echo "Luta não pode acontecer";
        } 

    }

    public function getDesafiado() {
        return $this->desafiado;
    }
    public function setDesafiado($dd) {
        $this->desafiado = $dd;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function setDesafiante($df) {
        $this->desafiante = $df;
    }
    public function getRounds() {
        return $this->rounds;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    public function getAprovada() {
        return $this->aprovada;
    }
    public function setAprovada($aprov) {
        $this->aprovada = $aprov;
    }
}