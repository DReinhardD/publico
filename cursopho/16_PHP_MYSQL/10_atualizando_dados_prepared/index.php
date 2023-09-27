<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host , $user, $pass,$db);


//QUERY

$id = 6;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "Sofá";
$descricao = "Sofá semi novo, com madeira de demolição";

$stmt->bind_param("ssi", $nome, $descricao, $id); // s= string, i = integer, d = double

$stmt -> execute();

if($stmt->error) {
    echo " Erro: " . $stmt->error;
}

