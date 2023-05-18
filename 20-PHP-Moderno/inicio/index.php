<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando do besteirol</title>
</head>
<body>
    <h1>
        <?php
            echo "Imprimiu agora? \u{1F30E}";
            $nome = "Werbet";
            $idade = 40;
            echo "<br>";
            echo "O meu nome é $nome e minha idade é $idade anos. <br>";
            //date_default_timezone_set("America/Sao_Paulo");
            echo "Hoje é dia ". date("d/M/Y").".<br>";
            echo "E a hora atual é " . date("G:i:s T");
        ?>
        
    </h1>
</body>
</html>