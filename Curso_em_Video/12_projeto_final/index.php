<pre>
<?php
require_once "Video.php";
require_once "Pessoa.php";
require_once "Gafanhoto.php";
require_once "Visualizacao.php";


$v[0] = new Video("Aula inicial de POO.");
$v[1] = new Video("Conteúdo Avançado de PHP.");
$v[2] = new Video("Trabalhando com Polimorfismo em PHP.");
print_r($v);


$g[0] = new Gafanhoto("Werbet", 39, "M", "sonyUnder");
$g[1] = new Gafanhoto("Jane", 27, "F", "janinha");
print_r($g);

$vis[0] = new Visualizacao($g[0], "Forest Gump - O Contador de Histórias.");
$vis[1] = new Visualizacao($g[1], $v[1]);
$vis[1]->avaliar(85);
print_r($vis);








?>
</pre>