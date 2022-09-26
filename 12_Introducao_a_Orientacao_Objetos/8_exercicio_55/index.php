<pre>
<?php
require_once "Carro.php";

$bmw = new Carro;
$bmw->cor = "Branco";
$bmw->valor = 1.500;
$bmw->cambio = "Automático";
$bmw->setVelocidadeMaxima(240);
print_r($bmw);
?>
</pre>