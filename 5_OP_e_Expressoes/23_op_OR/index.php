<?php

if (5 > 2 || 10 < 4) { /*true e false*/
    echo "Vai imprimir porque a primeira condição é verdadeira.<br>";
}

if (10 > 6 || 3 == 3) { /* true e true*/
    echo "Vai imprimir também.<br>";
}

if ("teste" != "teste" || 50 > 20) { /*false e true*/
    echo "Primeira condição false e segunda true.<br>";
}

if (5 === 15 || 20 > 100) { /*false e false*/
    echo "As duas são false.";
}