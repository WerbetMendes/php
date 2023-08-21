<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas 2.0</title>
    <link rel="stylesheet" href="css4.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas 2.0</h1>
        <?php 

            $inicio = date("m-d-Y", strtotime ("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $brl = $_REQUEST["brl"];
            $dolar = $brl / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus ". numfmt_format_currency($padrao, $brl, "BRL")." equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD")."</strong>"; 
        ?>
        <p>*cotaçao extraída diretamente do <a href="https//www.bcb.gov.br" target="_blank">Banco Central do Brasil</a></p>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html>