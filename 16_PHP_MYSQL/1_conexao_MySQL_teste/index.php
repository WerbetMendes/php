<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cadastro";

$conn = new mysqli($host, $user, $pass , $db);

$q = "INSERT INTO pessoas (nome, sobrenome) VALUES ('Werbet', 'Mendes')";

$conn->query($q);

$conn->close();

