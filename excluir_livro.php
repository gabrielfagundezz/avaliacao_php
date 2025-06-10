<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit;
}

require 'db.php';

$livro_id = $_GET['id'];
$usuario_id = $_SESSION['usuario_id'];


$sql = "DELETE FROM livros WHERE id = $livro_id AND usuario_id = $usuario_id"; 
                                            // verifica ID do usuario e garante que ele possa excluir apenas os proprios livros

if (mysqli_query($conexao, $sql)) {
    header("Location: dashboard.php");
} else {
    echo "Erro ao excluir livro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>