<?php session_start(); 

    require 'db.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha_hash = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha_hash);

    if(mysqli_stmt_execute($stmt)){
        $_SESSION['mensagem_sucesso'] = "Conta criada com sucesso! Agora você já pode fazer o login.";
        header("Location: index.php");
    }else{
        echo "Erro ao cadastrar usuário";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexao);
?>