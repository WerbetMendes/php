<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            margin-bottom: 10px;
        }

        select {
            margin-bottom: 10px;
        }

        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <form method="get" action="03cores.php">
        <label for="itxt">Texto:</label>
        <input type="text" name="t" id="itxt"><br>
        <label for="itam">Tamanho</label>
        <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt" selected>14</option>
            <option value="20pt">20</option>
            <option value="40pt">40</option>
        </select><br>
        <label for="icor">Cor:</label>
        <input type="color" name="cor" id="cor"><br>
        <input type="submit" value="Gerar">
    </form>
    
</body>
</html>

<?php

$txt = $_GET["t"];
$tam = $_GET["tam"];
$cor = $_GET["cor"];

echo "$txt tem o tamanho de $tam e a cor de $cor.";
echo <span class='texto'>$txt</span>;

?>