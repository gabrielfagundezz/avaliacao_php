<?php session_start(); include 'header.php';  ?>


<div class="row justify-content-center" >

    <div class="col-md-6">
        <div class="container mt-5"> <?php

            //Exibindo alerta de sucesso ao fazer o cadastro
            //verificando se a sessão contém a mensagem de sucesso
            if(isset($_SESSION['mensagem_sucesso'])){

                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo $_SESSION['mensagem_sucesso'];
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo '</div>';

                //limpa a mensagem para ela não aparecer de novo ao recarregar a página
                unset($_SESSION['mensagem_sucesso']);

            }

            //exibindo mensagem de erro no caso de email ou senha errados
            if (isset($_SESSION['mensagem_erro'])) {
    
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo $_SESSION['mensagem_erro'];
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo '</div>';

                // limpa a mensagem de erro
                unset($_SESSION['mensagem_erro']);
}


            ?>
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
