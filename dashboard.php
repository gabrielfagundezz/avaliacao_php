<?php session_start();

if(!isset($_SESSION['usuario_id'])){
    header('Location: index.php');
    exit;
}
require 'db.php';
include 'header.php';

$usuario_id = $_SESSION['usuario_id'];

?>

<div class="d-flex justify-content-between align-items-center" >

    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</h2>
    <a href="logout.php" class="btn btn-danger">Sair</a> 

</div>
<hr>

<h3>Adicionar novo livro</h3>
<form action="adicionar_livro.php" method="post" class="mb-5">
    <div class="row g-3">

        <div class="col-md-4">
            <input type="text" name="titulo" class="form-control" placeholder="Título do Livro" required>
        </div>
        <div class="col-md-3">
            <input type="text" name="autor" class="form-control" placeholder="Autor" required>
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select" required>
                <option value="Lido">Lido</option>
                <option value="Lendo">Lendo</option>
                <option value="Quero Ler">Quero Ler</option>
            </select>
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Adicionar</button>
        </div>

    </div>
</form>

<h3>Meus livros</h3>
<table class="table table-striped table-bordered">

    <thead class="table-dark">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        //Buscar apenas os livros do usuário logado
        $sql = "SELECT id, titulo, autor, status FROM livros WHERE usuario_id = $usuario_id";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0) {
            while($livro = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>" . htmlspecialchars($livro['titulo']) . "</td>";
                echo "<td>" . htmlspecialchars($livro['autor']) . "</td>";
                echo "<td>" . htmlspecialchars($livro['status']) . "</td>";
                echo "<td><a href='excluir_livro.php?id=" . $livro['id'] . "' class='btn btn-danger btn-sm'>Excluir</a></td>";
                echo "</tr>";

            }
        } else {
            echo "<tr><td colspan='4'>Nenhum livro encontrado.</td></tr>";
        }
        
        ?>
    </tbody>
</table>

<?php
mysqli_close($conexao);
include 'footer.php';
?>


