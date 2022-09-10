<?php

$arr = [
    [2, 5, 7, 3],
    [1, 8, 4, 0 ],
    [7, 9, 3, 5]
];

//loop no array externo
for($i = 0; $i < count($arr); $i++){

    //Imprimindo array 
    echo "Imprimindo array externo: " . ($i + 1). "<br>";

    //Imprimindo o array interno
    for($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . "<br>";

    }
}