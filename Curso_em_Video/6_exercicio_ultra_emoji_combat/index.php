<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }

    public function apresentar() {
        echo "<p>-----------------------------</p>";
        echo "<br>Lutador: ". ($this->getNome());
        echo "<br>Vem diretamente de: ". ($this->getNacionalidade());
        echo "<br>". ($this->getIdade()). " anos.";
        echo "<br>". ($this->getAltura()). "m de altura.";
        echo "<br>Pesando: ". ($this->getPeso()). " kg";
        echo "<br>Ganhou: " . ($this->getVitorias()) . " lutas";
        echo "<br>Perdeu: ". ($this->getDerrotas()). " lutas";
        echo "<br>E teve ". ($this->getEmpates()). " empate(s)";
    }
    public function status() {
        echo "<p>-----------------------------</p>";
        echo "<p>". $this->getNome() . " é um peso ". $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes.";

    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }


    public function getNome() {
        return $this->nome;
    }
    public function setNome($no) {
        $this->nome = $no;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($na) {
        $this->nacionalidade = $na;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($id) {
        $this->idade = $id;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($al) {
        $this->altura = $al;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }
    public function getCategoria() {
        return $this->categoria;
    }
    private function setCategoria() {
        if($this->peso < 52.2) {
            $this->categoria = "Peso Inválido";
        } else if($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } else if($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } else if($this->peso <= 120.2) {
           $this->categoria = "Pesado";
        } else {
            $this->categoria = "Peso Inválido";
        }
    }

    public function getVitorias() {
        return $this->vitorias;
    }
    public function setVitorias($vi) {
        $this->vitorias = $vi;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function setDerrotas($de) {
        $this->derrotas = $de;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setEmpates($em) {
        $this->empates = $em;
    }
}

$l = array();
$l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
$l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
$l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
$l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
$l[4] = new Lutador("UFOcobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
$l[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105,7, 12, 2, 4);
$l[3]->apresentar();
$l[2]->apresentar();
$l[3]->perderLuta();





class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta() {

    }
    public function lutar() {

    }

    public function getDesafiado() {
        return $this->desafiado;
    }
    public function setDesafiado($des) {
        $this->desafiado = $des;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function setDesafiante($desaf) {
        $this->desafiante = $desaf;
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