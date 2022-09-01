<?php

function teste($a = "teste") {
    echo "O valor de A é: $a <br>";
}

teste();
teste("asd");


// Uma boa prática é deixar os valores default à direita, por último.
function testando($b, $a = "x") {
    echo "O valor de A é: $a e de B é: $b <br>";
}

testando("1");
testando(1, 2);