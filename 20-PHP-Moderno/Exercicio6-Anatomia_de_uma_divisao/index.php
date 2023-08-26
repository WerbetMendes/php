<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="stylea.css">
</head>
<body>
    <?php 
        $dvdn = $_POST["dividendo"] ?? 0;
        $dvsr = $_POST["divisor"] ?? 1;
        $quociente = intdiv($dvdn, $dvsr);
        $resto = $dvdn % $dvsr;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo" name="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dvdn?>">
            <label for="divisor" name="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $dvsr?>">
            <button type="submit" id="analisar">Analisar</button>
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
            <tr> 
                <td><?=$dvdn?></td>
                <td><?=$dvsr?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>