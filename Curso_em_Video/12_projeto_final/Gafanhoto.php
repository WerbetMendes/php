<?php
require_once "Pessoa.php";

class Gafanhoto extends Pessoa {
    private $login;
    private $totAssistido;

    public function viuMaisUm() {

    }
    public function getLogin() {
        return $this->login;
    }
    public function setLogin($login) {
        $this->login = $login;
    }
    public function getTotAssistido() {
        return $this->totAssistido;
    }
    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

}