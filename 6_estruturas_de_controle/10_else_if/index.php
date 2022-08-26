<?php

// Primeiro if verdadeiro, nem vai para o else if.
if (10 > 6) {
    echo "Entrou no primeiro if.<br>";
} else if ( 10 > 2) {
    echo "Entrou no primeiro else if.<br>";
}

// Primeiro if falso, então vai para o else if.
if (10 < 6) {
    echo "Entrou no primeiro if.<br>";
} else if ( 10 > 2) {
    echo "Entrou no primeiro else if.<br>";
}

// As duas primeiras condições são falsas, então entrou no else.
if (10 < 6) {
    echo "Entrou no primeiro if.<br>";
} else if ( 10 < 2) {
    echo "Entrou no primeiro else if.<br>";
} else {
    echo "O if e o else if são falsos. Então entrou no else.<br>";
}

