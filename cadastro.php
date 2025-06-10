<?php include 'header.php'; ?>

<div class="row justify-content-center">

    <div class="col-md-6">

        <h1 class="text-center">Cadastro de usuário</h1>

        <form action="processa_cadastro.php" method="post">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success w-100">Cadastrar</button>
            </div>

        </form>

        <p class="text-center mt-3">Já tem uma conta? <a href="index.php">Faça login</a </p>    

    </div>
</div>

<?php include 'footer.php'; ?>