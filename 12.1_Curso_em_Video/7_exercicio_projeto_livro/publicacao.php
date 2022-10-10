<?php
require_once "pessoa.php";

interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear($p);
    public function avancarPag();
    public function voltarPag();
}

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes() {
        echo "<hr> <strong>Livro:</strong> " . $this->titulo . " escrito por ". $this->autor;
        echo "<br> Páginas: " . $this->totPaginas. " Atual: ". $this->pagAtual;
        echo "<br> Sendo lido por: ". $this->leitor->getNome();
    }
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }
    public function fechar() {
        $this->aberto = false;
    }
    public function folhear($p) {
       if($p > $this->totPaginas) {
            $this->pagAtual = 0;
       } else {
        $this->pagAtual = $p;
       }
    }
    public function avancarPag() {
        $this->pagAtual ++;
    }
    public function voltarPag() {
        $this->pagAtual --;
    }


    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    public function getLeitor() {
        return $this->leitor;
    }
    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

}