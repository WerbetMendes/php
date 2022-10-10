<?php
require_once "aluno.php";

class Bolsista extends Aluno {
    private $bolsa;

    public function renovarBolsa() {
        echo "Bolsa renovada.";
    }
    
    public function pagarMensalidade() {
       echo "<p><strong>". $this->getNome(). "</strong>, é bolsista! Então paga mensalidade com desconto.</p>"; 
    }
    public function getBolsa() {
        return $this->bolsa;
    }
    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }



}