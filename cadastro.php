<?php  
        session_start();

        include_once "php/includes/head.php";
        
        if(isset($_SESSION['erro_cadastro_user'])) {
            echo "<script> alert('Faltam campos para Preencher !')</script>";
    
            unset($_SESSION['erro_cadastro_user']);
        }

        if(isset($_SESSION['igual'])) {
            echo "<script> alert('E-mail já existe, tente outro !')</script>";
    
            unset($_SESSION['igual']);
        }
?>

        <div class="container p-5 mt-4 mb-3 container_login">
            <div class="logo d-flex justify-content-center mb-4">
                <a href="index.php">
                    <img src="img/logo_aumentado.jpg" width="160">
                </a>
            </div>

            <div class="container">
                <div class="row">

                    <div class="bloco_esquerdo col-md-6 d-flex justify-content-md-end justify-content-sm-center">
                        <img src="img/img_login.jpg" class="img-login my-auto">
                    </div>

                    <div class="col-md-5 ml-md-3 mt-3">
                        <h3 class="text-center">Crie uma conta</h3>
                        <div class="container">
                            <form name="form" onsubmit="return validaForm(this);" action="php/actions/cadastrar.php" method="post" class="form-group">

                                <label>Nome: </label><br>
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome"><br>

                                <label>Sobrenome: </label><br>
                                <input type="text" name="sobrenome" class="form-control" placeholder="Digite seu sobrenome"><br>

                                <label>Gênero: </label><br>
                                <span class="m-1"><input type="radio" name="genero" value="masculino"> Masculino</span><br>
                                <span class="m-1"><input type="radio" name="genero" value="feminino"> Feminino</span><br>
                                <span class="m-1"><input type="radio" name="genero" value="outro"> Outro</span><br><br>
                                
                                <label>Perfil: </label><br>
                                <select name="perfil" class="form-control">
                                    <option value="">Selecione o seu perfil</option>
                                    <option value="professor">Professor</option>
                                    <option value="coordenador">Coordenador Pedagógico</option>
                                    <option value="gestor">Gestor Escolar</option>
                                </select><br>

                                <label>E-mail: </label><br>
                                <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail"><br>

                                <label>Senha: </label><br>
                                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha"><br>

                                <label>Confirmar Senha:</label><br>
                                <input type="password" name="confirmasenha" class="form-control" placeholder="Confirme sua senha"><br>

                                <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
                            </form>

                            <span>Já tem uma conta ? <a href="login.php" class="text-secondary ml-auto">Fazer login</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include_once "php/includes/final_html.php"; ?>