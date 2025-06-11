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

// para a segurança, criar os da query com '?' no lugar dos dados reais
$sql = "INSERT INTO livros (titulo, autor, status, usuario_id) VALUES (?, ?, ?, ?)";

//prepara a declaração
$stmt = mysqli_prepare($conexao, $sql);

//"sssi" significa que os tipos de dados são: String, String, String, Integer
mysqli_stmt_bind_param($stmt, "sssi", $titulo, $autor, $status, $usuario_id);

if(mysqli_stmt_execute($stmt)){
    header('Location: dashboard.php');
}else{
    echo "Erro ao adicionar livro" . mysqli_error($conexao);
}

// fecha a declaracao e a conexao
mysqli_stmt_close($stmt);
mysqli_close($conexao);

?>