<pre>
<?php
require_once "Animal.php";
require_once "Mamifero.php";
require_once "Lobo.php";
require_once "Cachorro.php";


$m1 = new Mamifero;
$m1->emitirSom();
print_r($m1);

$l1 = new Lobo;
$l1->emitirSom();
print_r($l1);

$c1 = new Cachorro;
$c1->emitirSom();
$c1->reagirDono(false);
$c1->reagirHora(21, 0);
$c1->reagirFrase("Toma!");
print_r($c1);



?>
</pre>