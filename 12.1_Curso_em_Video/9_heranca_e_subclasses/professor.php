<?php
require_once "pessoa.php";

class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function receberAum() {
        echo "<p> O professor <strong>". $this->getNome(). "</strong> acaba de receber um aumento.</p>";
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }

}