<?php
class Professor {
    private $especialidade;
    private $salario;

    public function receberAum() {

    }
    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($espec) {
        $this->especialidade = $espec;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }




}