<?php
        require_once "php/actions/conexao.php";
        include_once "php/includes/head.php";
        include_once "php/includes/header.php";
        include "php/actions/verifica_login.php";

        if(isset($_SESSION['atividade_sucesso'])) {
                echo "<script> alert('Atividade Cadastrada com Sucesso !')</script>";
    
                unset($_SESSION['atividade_sucesso']);
        }

?>      
        <h3 class="text-center mt-3">Seu Perfil</h3>

        <div class="container container_perfil">
                <div class="row">
                        <div class="col-md-6 mx-auto">
                             <div class="d-flex justify-content-center mb-3">

                                <div class="d-flex flex-column">
                                   <img src="img/perfil.png" class="img-fluid m-2" width="150" height="150">
                                   <a class="btn btn-secondary"href="#">Editar Perfil</a>
                                </div>
                             </div>


                             <div class="d-flex flex-column align-items-center mb-2">
                                <a class="text-info mt-2" href="atividades_cadastradas.php">Suas atividades</a>
                                <a class="text-info mt-2" href="incluir_atividade.php">Incluir atividade</a>
                             </div>
                        </div>
                </div>
        </div>

<?php include_once "php/includes/footer.php"; ?>
<?php include_once "php/includes/final_html.php"; ?>