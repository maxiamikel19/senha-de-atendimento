<?php

    $host = "localhost";
    $user = "root";
    $pwd = "nova_senha";
    $dbName = "atendimento";
    $port = 3306;

    try{
        $conn = new PDO("mysql:host=$host;port=$port;dbname=". $dbName, $user, $pwd);
        //echo "Connection success!";
    }catch(PDOException $ex){
        die("Error: Falhou na conexão com o banco de dados: " . $ex->getMessage());
    }