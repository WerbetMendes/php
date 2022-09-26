<?php
class Carro {
   public $cambio;
   public $cor;
   public $valor;
   public $velocidadeMaxima;

   public function getVelocidadeMaxima() {
    return $this->velocidadeMaxima;
   }
   public function setVelocidadeMaxima($vel) {
    $this->velocidadeMaxima = $vel;
   }
}
