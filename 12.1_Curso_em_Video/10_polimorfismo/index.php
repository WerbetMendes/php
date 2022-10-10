<pre>
<?php
require_once "Mamifero.php";
require_once "Reptil.php";
require_once "Peixe.php";
require_once "Ave.php";
require_once "Canguru.php";
require_once "Cachorro.php";

$m1 = new Mamifero;
$m1->setPeso(5);
$m1->setIdade(3);
$m1->setMembros(4);
$m1->setCorPelo("Marrom");
$m1->locomover();
$m1->alimentar();
$m1->emitirSom();
print_r($m1);

$r1 = new Reptil;
$r1->setCorEscama("Verde");
$r1->setMembros(4);
$r1->setPeso(1);
$r1->locomover();
$r1->alimentar();
$r1->emitirSom();
print_r($r1);

$p1 = new Peixe;
$p1->setCorEscama("Dourado");
$p1->setPeso(2);
$p1->setIdade(2);
$p1->soltarBolha();
$p1->locomover();
$p1->alimentar();
$p1->emitirSom();
print_r($p1);

$a1 = new Ave;
$a1->setCorPena("Amarela");
$a1->setIdade(2);
$a1->locomover();
$a1->alimentar();
$a1->emitirSom();
$a1->fazerNinho();
print_r($a1);

$c1 = new Canguru;
$c1->locomover();
$c1->usarBolsa();
$c1->alimentar();
print_r($c1);

$k1 = new Cachorro;
$k1->locomover();
$k1->alimentar();
$k1->emitirSom();
$k1->roerOsso();
print_r($k1);

?>
</pre>