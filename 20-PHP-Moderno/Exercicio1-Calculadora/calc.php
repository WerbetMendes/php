<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
        <section>
            <form>
                <?php
                    $n = $_REQUEST["numero"];
                    $a = $n-1;
                    $s = $n+1;
                echo "O número escolhido é: $n";
                echo "<br>O seu antecessor é: $a";
                echo "<br>O seu sucessor é: $s";
                ?>
                <!-- <button onclick="javascript:window.location.href='index.html'"> -->
                <button id="calcular">
                    <a href="javascript:history.go(-1)">&#x2B05; Voltar</a>
                </button>
            </form>
        </section>
</body>
</html>