<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
        $sal = $_POST['sal'] ?? 0;
        $salmin = 1380;
        $result = intdiv($sal, $salmin);
        $dif = $sal % $salmin;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="sal" name="sal">Salário (R$)</label>
            <input type="number" step="" name="sal" id="sal" value="<?=$sal?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong></p>
            <button type="submit" id="calcular">Calcular</button>
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
           echo "Quem recebe um salário de R\$". number_format($sal, 2, ",",".")." ganha <strong>$result sálarios mínimos</strong> + R\$". number_format($dif, 2, ",", "."); 
        ?>
    </section>
</body>
</html>