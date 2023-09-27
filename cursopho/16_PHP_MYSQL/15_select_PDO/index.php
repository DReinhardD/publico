<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//QUERY

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$id = 2;

$stmt->bindParam(":id", $id);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);