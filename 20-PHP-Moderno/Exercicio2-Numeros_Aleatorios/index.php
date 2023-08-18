<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números Aleatórios</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <main>
        <header>
            <h1>Trabalhando com números aleatórios</h1>
        </header>
        <?php
            $n = mt_rand(0, 100);
            echo "<p>Gerando um número aleatório entre 0 e 100...<br>O valor gerado foi <strong>$n</strong></p>"
            //Nota: se você precisa de um número aleatório criptografado, ou seja mais seguro, utilize mt_int. Porém, esteja ciente que leva muito mais tempo.
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
        
</body>
</html>