<?php 

    require 'db.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){
        header("Location: index.php");
    }else{
        echo "Erro ao cadastrar usuário";
    }

    mysqli_close($conexao);
?>