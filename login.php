<?php 
        session_start();
    
        include_once "php/includes/head.php";
    
        if(isset($_SESSION['sucesso'])) {
            echo "<script> alert('Cadastro realizado com sucesso !')</script>";

            unset($_SESSION['sucesso']);
        }
?>

        <div class="container p-5 mt-4 container_login">
            <div class="logo d-flex justify-content-center mb-5">
                <a href="index.php">
                    <img src="img/logo_aumentado.jpg" width="160">
                </a>
            </div>

            <div class="container">
                <div class="row">

                    <div class="bloco_esquerdo col-md-6 d-flex justify-content-md-end justify-content-sm-center">
                        <img src="img/img_login.jpg" class="img-login" width="250">
                    </div>

                    <div class="col-md-5 ml-md-3 mt-5">
                        
                        <div class="container">

                            <div class="google d-flex justify-content-around align-items-center mb-2 border">
                                <img src="img/logo_google.png">
                                <p class="text-white my-auto margem_google mr-5 pr-4">Login com Google</p>
                            </div>

                            <div class="face d-flex justify-content-around align-items-center mb-3">
                                <img src="img/face_logo.png">
                                <p class="text-white my-auto mr-5">Login com Facebook</p>
                            </div>
                        </div>

                        <div class="container">
                            <form action="php/actions/logar.php" class="form-group" method="post">

                                <input type="text" name="email" class="form-control email" placeholder="E-mail"><br>

                                <input type="password" name="senha" class="form-control senha" placeholder="Senha"><br>

                                <?php
                                    if(isset($_SESSION['nao_autenticado'])) {
                                ?>

                                <div class="container bg-danger p-2 mb-2">
                                    <p class="text-white my-auto">ERRO: E-mail ou Senha inválidos</p>
                                </div>

                                <?php } unset($_SESSION['nao_autenticado']); ?>

                                <button type="submit" class="btn btn-info btn-block">Entrar</button>
                            </form>             

                            <a href="cadastro.php" class="text-secondary ml-auto">Criar Conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include_once "php/includes/final_html.php"; ?>