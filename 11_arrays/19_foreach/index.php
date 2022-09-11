<?php

$arr1 = [
    "nome"=>"Werbet",
    "idade"=>39,
    "profissao"=> "programador"
];

$arr2 = [
    "nome"=>"Jane",
    "idade"=> 27,
    "profissao"=> "VASM"
];

foreach($arr1 as $werbet=>$value) {
    echo "$werbet => $value <br>";
}

echo "<br>";

foreach($arr2 as $jane => $value) {
    echo "$jane => $value<br>";
}
