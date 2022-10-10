<?php
abstract Class Animal {
    protected $peso;
    protected $idade;
    protected $membros;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso . "kg";
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade . " anos.";
    }
    public function getMembros() {
        return $this->membros;
    }
    public function setMembros($membros) {
        $this->membros = $membros;
    }


}