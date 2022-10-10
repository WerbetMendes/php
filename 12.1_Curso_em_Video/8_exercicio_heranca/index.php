<pre>
<?php
require_once "pessoa.php";
require_once "aluno.php";
require_once "funcionario.php";
require_once "professor.php";

$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

$p1->setNome("Pedro");
$p2->setNome("Maria");
$p3->setNome("Cláudio");
$p4->setNome("Fabiana");

$p1->setSexo("M");
$p2->setSexo("F");
$p3->setSexo("M");
$p4->setSexo("F");

$p1->setIdade(19);
$p2->setIdade(14);
$p3->setIdade(35);
$p4->setIdade(42);

$p2->cancelarMatr();
$p3->setSalario(1200);
$p3->receberAum(200);
$p4->mudarTrabalho();

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

?>
</pre>