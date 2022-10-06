<?php
// Preenchendo com dados que vêm do backend

$usuario = [
    'nome'=> 'Werbet',
    'idade'=> 39,
    'profissao'=> 'Programador'
];

if($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" placeholder="Digite seu nome" value="<?= $nome ?>">
        <input type="submit" value="Enviar">  
    </form>
</body>
</html>