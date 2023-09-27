<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host , $user, $pass,$db);


//QUERY

$nome = "Sofá";

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome); // s= string, i = integer, d = double

$stmt -> execute();

if($stmt->error) {
    echo " Erro: " . $stmt->error;
}

$conn->close();