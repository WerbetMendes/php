<pre>
<?php
require_once "pessoa.php";
require_once "publicacao.php";

$p[0] = new Pessoa("Pedro", 22, "M");
$p[1] = new Pessoa("Maria", 31, "F");

$l[0] = new Livro("PHP Básico", "Nassin Taleb", 350, $p[0]);
$l[1] = new LIvro("POO com PHP", "Nicholas Straws", 450, $p[0]);
$l[2] = new Livro("A mágica do amor", "Tati Barnardi", 500, $p[1]);

$l[0]->abrir();
$l[0]->folhear(90);
$l[0]->avancarPag();
$l[0]->detalhes();

$l[1]->abrir();
$l[1]->folhear(60);
$l[1]->detalhes();

?>
</pre>