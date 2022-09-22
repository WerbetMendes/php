<?php
require_once "aluno.php";

class Tecnico extends Aluno {
    private $registroProfissional;
    
    public function praticar() {
        echo "<p> O(A) aluno(a) <strong>". $this->getNome() . "</strong> é um(a) aluno(a) técnico.</p>";
    }
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }




}