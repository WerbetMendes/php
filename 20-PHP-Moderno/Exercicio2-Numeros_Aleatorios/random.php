<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabalhando com números aleatórios</h1>
    <p>Gerando um número entre 0 e 100...</p>
    <?php 
            
            $numrandom = mt_rand(0, 100);
            echo "<p>O valor gerado foi: $numrandom</p>";
        
    ?>
    <form action="random.php" method="POST"></form>
        <button type="submit" name="gerar">Gerar outro</button>
    </form>
</body>
</html>