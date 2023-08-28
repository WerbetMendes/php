<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
    <?php 
        $preco= $_POST['preco'] ?? '';
        $reaj= $_POST['reaj'] ?? '';
        $aumento= $preco * $reaj / 100;
        $novo = $preco + $aumento;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" required value="<?=$preco?>">
            <label for="reaj">Qual será o percentual de reajuste? 
            (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" value=<?=$reaj?> oninput="updatevalue()">
            <button type="submit" id="calcular">Reajustar</button>
        </form>
    </main>
    <section>
        <?php 
            
        ?>
        <h1>Resultado do reajuste</h1>
        <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong> <?=$reaj?>% de aumento</strong>, vai passar a custar R$<?=number_format($novo, 2, ",", ".")?> a partir de agora.</p>
    </section>
    <script>
        //Declarações automáticas
        updatevalue();

        function updatevalue() {
            p.innerText= reaj.value;
        }
    </script>
</body>
</html>