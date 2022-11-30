<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $query = "SELECT * FROM Contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();


?>