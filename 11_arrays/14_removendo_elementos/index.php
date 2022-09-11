<?php

$arr = ["Testando", "a", 145.60, "remoção", "elementos"];

$remocao = array_splice($arr, 2, 1);

print_r($arr);