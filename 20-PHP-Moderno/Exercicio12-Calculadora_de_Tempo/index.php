<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="stylec.css">
</head>
<body>
    <?php 
        $total= $_POST['total']??0;
        $sobra= $total;

        $sem= intdiv($sobra, 604_800);
        $sobra= $sobra % 604_800;

        $dias= intdiv($sobra, 86_400);
        $sobra= $sobra % 86_400;

        $horas= intdiv($sobra, 3_600);
        $sobra= $sobra % 3_600;

        $minutos= intdiv($sobra, 60);
        $sobra= $sobra % 60;

        $seg= $sobra;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="total">Qual é o total de segundos?</label>
            <input type="number" name="total" id="total" value="<?=$total?>">
            <button type="submit" id="calcular">Calcular</button>
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total, 0, ",", ".")?> de segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$sem?> semanas.</li>
            <li><?=$dias?> dias.</li>
            <li><?=$horas?> horas.</li>
            <li><?=$minutos?> minutos.</li>
            <li><?=$seg?> segundos.</li>
        </ul>
    </section>
</body>
</html>