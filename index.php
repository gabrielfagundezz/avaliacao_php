<?php include 'header.php';  ?>

<div class="row justify-content-center" >

    <div class="col-md-6">
        <h1 class="text-center" >Login</h1>
        <form action="processa_login.php" method="post" >

            <div class="mb-3">
                <label for="email" class="form-label" >Email</label>
                <input type="email" class="form-control" id="email" name="email" required >
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required >
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary w-100" value="Entrar" >
            </div>

        </form>

        <p class="text-center" >Não tem uma conta? <a href="cadastro.php" >Cadastre-se</a </p>

    </div>
</div>

<?php include 'footer.php'; ?>
