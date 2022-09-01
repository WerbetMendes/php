<form method="get" action="01valor.php">
        <input type="number" name="v">
        <input type="submit" value="Calcular Potência">
    </form>


<?php

$valor = $_GET["v"];

$rq = $valor ** 2;

echo "O número $valor elevado à segunda potência é igual a $rq."
?>