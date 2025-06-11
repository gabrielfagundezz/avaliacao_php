<?php session_start();

    require 'db.php';

    $email = $_POST['email'];
    $senha_form = $_POST['senha'];

    $sql = "SELECT id, nome, senha FROM usuarios WHERE email = ? ";

    //prepara o stmt
    $stmt = mysqli_prepare($conexao, $sql);
    
    //vincula o parametro s = string
    mysqli_stmt_bind_param($stmt, "s", $email);

    //executa o stmt
    mysqli_stmt_execute($stmt);

    //pega o resultado da declaração preparada
    $resultado = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($resultado) == 1){
        $usuario = mysqli_fetch_assoc($resultado);

        if(password_verify($senha_form, $usuario['senha'])){
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            header('Location: dashboard.php');
            exit;
        }else{
            echo "Email ou senha inválidos";
        }
    
    }else{
        echo "Email ou senha inválidos";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexao);

?>