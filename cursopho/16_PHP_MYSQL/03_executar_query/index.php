<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host , $user, $pass,$db);

// --- QUERY

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);

print_r($result);

$conn->close();