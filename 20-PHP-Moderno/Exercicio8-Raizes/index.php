<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Raízes</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
    <?php 
        $num = $_POST['num'] ?? 1;
        $raiz = sqrt($num);
        $rc = $num ** (1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <button type="submit" id="calcular">Calcular Raízes</button>
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Analisando o número <strong>$num</strong>, temos:<br>";
            echo "<ul><li>A sua raiz quadrada é <strong>".number_format($raiz, 3, ",", "."). "</strong><br>";
            echo"<li>A sua raiz cúbica é <strong>".number_format($rc, 3, ",", "."). "</ul>";
        ?>
    </section>
</body>
</html>