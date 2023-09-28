<?php

$host = "localhost";
$dbname = "agenda";
$user = "diago";
$pass = "210182Sa@";
$port = 3312;
$charset = "utf8mb4";

try{

    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    //ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    //erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
}