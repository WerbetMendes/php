<form method="get" action="02idade.php">
        Nome: <input type="text" name="nome"><br>
        Ano de Nascimento: <input type="number" name="ano"><br>
        <fieldset class="field">
            <legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem" checked>
            <label for="masc">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" value="mulher">
            <label for="fem">Feminino</label>
        </fieldset><br>
        <input type="submit" value="Enviar">
        </form>

        <style>
            .field {
                max-width: 200px;
            }
        </style>

    <?php

    $nome = $_GET["nome"];
    $ano = $_GET["ano"];
    $sexo = $_GET["sexo"];
    $idade = date("Y") - $ano;

    echo "$nome é $sexo e tem $idade anos.";


    ?>




