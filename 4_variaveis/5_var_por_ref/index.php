<?php

$x = 10;
$y =& $x;
echo "$x <br>";
echo "$y <br>";

$y = 20;
echo "Valor após nova referência de y. <br>";
echo "$x <br>";
echo "$y <br>";


?>