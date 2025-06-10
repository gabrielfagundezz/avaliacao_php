<?php 

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'biblioteca_db';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco); 

    if (!$conexao) {
        die("Erro na conexão: " . mysqli_connect_error());
    }


?>