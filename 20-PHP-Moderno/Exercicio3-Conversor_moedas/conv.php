<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado da Conversão</h1>
        <?php
            $brl = $_REQUEST["brl"];
            $dolar = $brl / 4.97;
            /*echo "Na conversão fixa, seus R\$" . number_format($brl,2, ",", ".") . "equivalem a US\$" . number_format($dolar,2, ",", ".");*/

            /*Formatação de moedas com internacionalização.
            Biblioteca intl*/
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Na conversão fixa, seus ". numfmt_format_currency($padrao, $brl, "BRL")." equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD")."</strong>"; 
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html>