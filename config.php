<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'campeonatoY';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*if($conexao->connect_errno) {
        echo "Erro na conexão";
    } else {
       echo "Conexão efetuada com sucesso!";
    }*/
    
?>