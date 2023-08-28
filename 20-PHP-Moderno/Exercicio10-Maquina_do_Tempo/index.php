<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquina do Tempo</title>
    <link rel="stylesheet" href="stylem.css">
</head>
<body>
    <?php 
        $atual = date('Y');
        $nasc= $_POST['ano']??"2000";
        $idano= $_POST['idano']?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1> 
        <form action=<?=$_SERVER['PHP_SELF']?> method="post">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano" min="1900" max="<?=$atual?>" required value="<?=$nasc?>">
            <label for="idano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="idano" id="idano" value=<?=$idano?> required >
            <button type="submit" id="calcular">Qual será minha idade?</button>
        </form>
    </main>
    <section>
        <?php 
            $idade= $idano - $nasc;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$idano?>!</p>
    </section>
</body>
</html>