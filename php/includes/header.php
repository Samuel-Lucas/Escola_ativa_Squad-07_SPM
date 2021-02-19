<?php
    session_start();
?>

<header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
              <div class="container">
      
                <a href="index.php">
                  <img class="navbar-brand" src="img/logo_escola_ativa.png" width="142">
                </a>
      
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navPrincipal">
                  <span class="navbar-toggle-icon">
                    <i class="fas fa-bars"></i>
                  </span>
                </button>
      
                <div class="collapse navbar-collapse" id="navPrincipal">
                  <ul class="navbar-nav ml-auto">

                    <li class="nav-item d-flex m-1">
                        <div class="d-block d-md-none">
                            <img src="img/escola_ativa.jpg" width="30">
                        </div>
                        <a href="index.php" class="nav-link ml-1">Comunidade Escola Ativa</a>
                    </li>
      
                    <li class="nav-item d-flex m-1">
                        <div class="d-block d-md-none">
                            <img src="img/quem_somos.jpg" width="30">
                        </div>
                        <a href="quemSomos.php" class="nav-link ml-1">Quem Somos</a>
                    </li>
      
                    <li class="nav-item d-flex m-1">
                        <div class="d-block d-md-none">
                            <img src="img/metodologia_ativa.jpg" width="30">
                        </div>
                        <a href="metodologiasAtivas.php" class="nav-link ml-1">Metodologias Ativas</a>
                    </li>          
                              
                <?php

                  if(isset($_SESSION['nome'])) {

                    $nome = $_SESSION['nome'];
   
                ?>

                <li class="nav-item d-flex m-1 dropdown show">
                  <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Olá <?php echo $nome; ?>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="painel.php">Perfil</a>
                    <a class="dropdown-item" href="atividades_cadastradas.php">Suas atividades</a>
                    <a class="dropdown-item" href="incluir_atividade.php">Inserir atividade</a>
                    <a class="dropdown-item" href="php/actions/sair.php">Sair</a>
                  </div>
                </li>

                  <?php } else {?>
      
                    <li class="nav-item m-1">
                      <a href="login.php" class="btn btn-outline-dark ml-lg-4">Login</a>
                    </li>

                    <li class="nav-item m-1">
                      <a href="cadastro.php" class="btn btn-secondary text-white ml-lg-4">Cadastrar</a>
                    </li>

                  <?php } ?>
                  </ul>
                </div>
              </div>
            </nav>
</header>
