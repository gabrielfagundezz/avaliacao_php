<?php session_start();

    require 'db.php';

    $email = $_POST['email'];
    $senha_form = $_POST['senha'];

    $sql = "SELECT id, nome, senha FROM usuarios WHERE email = '$email' ";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) == 1){
        $usuario = mysqli_fetch_assoc($resultado);

        if(password_verify($senha_form, $usuario['senha'])){
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            header('Location: dashboard.php');
        }else{
            echo "Email ou senha inválidos";
        }
    
    }else{
        echo "Email ou senha inválidos";
    }

    mysqli_close($conexao);

?>