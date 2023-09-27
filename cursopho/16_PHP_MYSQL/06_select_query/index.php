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


$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();


//UM RESULTADO
$itens = $result->fetch_assoc();

print_r($itens);

//TODOS OS RESULTADOS

$itens = $result->fetch_all();
print_r($itens);

