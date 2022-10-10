<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cadastro";

$conn = new mysqli($host, $user, $pass , $db);

// É um método para preparar a query. Nesse método, não passamos os valores direto na query
// e assim, adicionamos proteção e performance. No final, utilizamos "execute".

$nome = "Paula";
$sobrenome = "Fernandes";

$stmt = $conn->prepare("INSERT INTO pessoas(nome, sobrenome) VALUES (?, ?)");
$stmt->bind_param("ss", $nome, $sobrenome);  //s = string, i = integer, d = double
$stmt->execute();

// Como os valores serão duas strings, no bind_param colocamos "ss" antes de dizermos os valores.