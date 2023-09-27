<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host , $user, $pass,$db);


//QUERY
$table = "itens";
$nome = "Xícara";
$descricao = "É uma xíracara da cor azul";


$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();