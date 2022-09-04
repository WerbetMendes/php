<?php

$str1 = "Esta é menor";
$str2 = "Esta string é um pouco grande.";

echo strlen($str1). "<br>";
echo strlen($str2). "<br>";

$len1 = strlen($str1);
$len2 = strlen($str2);

if ($len1 > $len2) {
    echo "A primeira string é maior do que a segunda.<br>";
} else {
    echo "A primeira string é menor do que a segunda.<br>";
}