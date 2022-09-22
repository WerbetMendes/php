<pre>
<?php
require_once "visitante.php";
require_once "aluno.php";
require_once "bolsista.php";
require_once "professor.php";
require_once "tecnico.php";

$v1 = new Visitante();
$v1->setNome("Juvenal");
$v1->setIdade(39);
$v1->setSexo("M");
print_r($v1);

$a1 = new Aluno();
$a1->setNome("Pedro");
$a1->setIdade(15);
$a1->setSexo("M");
$a1->setMatricula(1245);
$a1->setCurso("Programação Orientada a Objeto - PHP");
$a1->pagarMensalidade();
print_r($a1);

$b1 = new Bolsista();
$b1->setBolsa("Integral");
$b1->setMatricula(17174);
$b1->setCurso("Java para Iniciantes");
$b1->setNome("Werbet");
$b1->setIdade(22);
$b1->setSexo("M");
$b1->pagarMensalidade();
print_r($b1);

$p1 = new Professor();
$p1->setNome("Reginaldo Gaia");
$p1->setIdade(52);
$p1->setSexo("M");
$p1->setEspecialidade("Matemática Avançada");
$p1->setSalario(1.200);
$p1->receberAum();
print_r($p1);

$t1 = new Tecnico();
$t1->setNome("Amarilda");
$t1->setIdade(28);
$t1->setSexo("F");
$t1->setMatricula(89.170);
$t1->setCurso("JavaScript para Iniciantes");
$t1->setRegistroProfissional("RP: 15678");
$t1->praticar();
print_r($t1);



?>
</pre>