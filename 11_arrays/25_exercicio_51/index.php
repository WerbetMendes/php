<?php

$ranking = [
    "Lineker"=> 1200,
    "Anderson"=> 200,
    "Maria" => 350,
    "Werbet"=> 1500,
    "Yeffer"=> 1100,
    "Paulo"=> 450,
    "Sofia"=> 900
];
arsort($ranking);
?>

<h1>Lista dos vencedores da Semana</h1>
<ol>
    <?php foreach($ranking as $pontuacao => $value): ?>
            <li> <?= $pontuacao ?>- <?= $value ?> pts.</li>
    <?php endforeach; ?>
</ol>