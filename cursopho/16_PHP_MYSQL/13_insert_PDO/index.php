<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//QUERY

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

$nome = "Suporte monitor";
$descricaco = "O Suporte esta novo e na caixa ainda.";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricaco);

$stmt->execute();