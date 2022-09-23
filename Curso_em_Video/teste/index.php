<?php

abstract class pai {
    public function herdado() {
     $this->sobrescrito();
    }
    protected function sobrescrito() {
     echo 'pai';
    }
  }
  class filha extends pai {
    protected function sobrescrito() {
     echo 'filha';
    }
  }
  $teste = new filha();
  $teste->herdado();

  // Resultado: filha