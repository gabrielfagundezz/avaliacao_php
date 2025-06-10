<?php session_start(); 

if(!isset($_SESSION['usuario_id'])){
    header('Location: index.php');
    exit;
}

require 'db.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$status = $_POST['status'];
$usuario_id = $_SESSION['usuario_id'];  //Pega o id da sessão do user logado

$sql = "INSERT INTO livros (titulo, autor, status, usuario_id) VALUES ('$titulo', '$autor', '$status', '$usuario_id')";

if(mysqli_query($conexao, $sql)){
    header('Location: dashboard.php');
}else{
    echo "Erro ao adicionar livro" . mysqli_error($conexao);
}

mysqli_close($conexao);

?>