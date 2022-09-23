<pre>
<?php
require_once "Video.php";
require_once "Pessoa.php";
require_once "Gafanhoto.php";


$v[0] = new Video("Aula inicial de POO.");
$v[1] = new Video("Conteúdo Avançado de PHP.");
$v[2] = new Video("Trabalhando com Polimorfismo em PHP.");
print_r($v);


$g1 = new Gafanhoto("Werbet", 39, "M", "sonyUnder");
print_r($g1);








?>
</pre>