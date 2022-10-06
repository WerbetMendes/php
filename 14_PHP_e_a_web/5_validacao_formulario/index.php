<?php
$validacoes = [];

if(count($_POST) > 0) {
    if(!isset($_POST['name'])) {
        $validacoes[] = "Por favor, preencha o nome do usuário!";
    }

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
<?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li><?= $validacao ?> </li>
            <?php endforeach ?>
        </ul>

    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div><input type="text" name="email" placeholder="Digite seu email"></div>
        <div><input type="password" name="senha" placeholder="Digite sua senha"></div>
        <div><input type="password" name="confirmacao" placeholder="Confirme sua senha"></div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>