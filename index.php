<?php include 'header.php';  ?>

<div class="row justify-content-center" >

    <div class="col-md-6">
        <h1 class="text-center" >Login</h1>

            <form action="processa_login.php" method="post" >
    
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required >
                </div>
    
               <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
        
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                </div>
    
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary w-100" value="Entrar" >
                </div>
    
            </form>


        <p class="text-center" >Não tem uma conta? <a href="cadastro.php" >Cadastre-se</a </p>

    </div>
</div>

<?php include 'footer.php'; ?>
