<?php
class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0);
        echo "Conta criada com sucesso!<br>";
    }  

    public function getnumConta() {
        return $this->numConta;
    }

    public function setnumConta($n) {
        $this->numConta = $n;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($t) {
        $this->tipo = $t;
       
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($d) {
        $this->dono = $d;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($st) {
        $this->status = $st;
    }

    public function abrirConta($t) {
        $this->setTipo($t);
        if($t == "CC") {
            $this->setSaldo(50);
        } else if ($t == "CP") {
            $this->setSaldo(150);
        }  
        $this->setStatus(true);
    }  

    public function fecharConta() {
        if($this->getSaldo() > 0) {
            echo "Erro. Conta ainda com dinheiro!<br>";
        } else if ($this->getSaldo() < 0) {
            echo "Erro. Conta em débito. Impossível encerrar.<br>";
        } else {
            $this->setStatus(false);
            echo "A conta de ". $this->getDono()." foi fechada com sucesso!<br>";
        }
    }

    public function depositar($v) {
        if($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "O valor de R$$v foi depositado com sucesso!<br>";
        } else {
            echo "Conta fechada. Não consigo depositar.<br>";
        }
    }

    public function sacar($v) {
        if($this->getStatus()) {
           if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "Saque no valor de R$$v autorizado na conta de " .$this->getDono().".<br>"; 
           } else {
            echo "Saldo insuficiente para saque.<br>";
           }
        } else {
            echo "A conta não está aberta.<br>";
        }  
    }  
            
    public function pagarMensal() {
        if($this->getTipo() == "CC") {
            $v = 12;
        } else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "A mensalidade de R$$v foi debitada na sua conta.<br>";
        } else {
            echo "Problemas com a conta. Não posso cobrar.<br>";
        }
    }
}


    $p1 = new ContaBanco;
    $p1->abrirConta("CC");
    $p1->setnumConta(431437);
    $p1->setDono("Jubileu");
    $p1->depositar(300);
    $p1->pagarMensal();
    $p1->sacar(338);
    $p1->fecharConta();
    print_r($p1);
    echo "<br><br>";


    $p2 = new ContaBanco;
    $p2->abrirConta("CP");
    $p2->setnumConta(171743);
    $p2->setDono("Creuza");
    $p2->depositar(500);
    $p2->sacar(100);
    $p2->pagarMensal();
    print_r($p2);

    


