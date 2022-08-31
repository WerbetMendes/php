<?php

function ParouImpar($n) {
    if($n % 2 == 0) {
        echo "O número $n é PAR!";
    } else {
        echo "O número $n é ÍMPAR!";
    }
}

ParouImpar(8);