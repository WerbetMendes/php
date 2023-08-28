<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="stylec.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque= $_POST['saque'] ??0;
        $resto= $saque;

        //A função floor arredonda para baixo.
        $tot100= floor($resto / 100);
        $resto %= 100;

        $tot50= floor($resto / 50);
        $resto %= 50;

        $tot10 = floor($resto / 10);
        $resto %= 10;

        $tot5 = floor($resto / 5);
        $resto %= 5;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" value=<?=$saque?> step="5" min="5" required>
            <p style="font-size: 0.6em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <button type="submit">Sacar</button>
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="Nota de 100" class="nota">x<?=$tot100?></li>
            <li><img src="img/50-reais.jpg" alt="Nota de 50" class="nota">x<?=$tot50?></li>
            <li><img src="img/10-reais.jpg" alt="Nota de 10" class="nota" class="nota">x<?=$tot10?></li>
            <li><img src="img/5-reais.jpg" alt="Nota de 5" class="nota">x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>