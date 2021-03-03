<?php include_once "php/includes/head.php"; ?>
    <?php include_once "php/includes/header.php"; ?>

          <div class="container mb-5">
            <a class="link-color" style="text-decoration: none;" href="aplicacaoMetodologia.php">
              <div class="jumbotron my-4 d-flex align-items-center " style="background: url(img/aula_jumbotron.jpg) no-repeat center top">
                <h3 class="text-center text-white mb-3">Por que aplicar Metodologias Ativas nas escolas?</h3>
              </div>
            </a>

            <h4 class="text-center text-secondary mb-4 section-title-center" style="margin-top: 80px">Metodologias Ativas</h4>

            <div class="container">
                <div class="row d-flex flex-wrap justify-content-between espacamento">

                    <div class="card my-2 mx-auto" style="width: 18rem; cursor: pointer;">
                        <img class="card-img-top" src="img/img1.jpg" alt="Card image cap">
                        <div class="card-body bg-light">
                          <h5 class="card-title">Matemática</h5>
                          <p class="card-text">Confira metodologias ativas para a disciplina de Matemática.</p>
                          <a href="categoria.php?categoria=Matemática" class="btn btn-success text-white">Confira</a>
                        </div>
                    </div>

                    <div class="card my-2 mx-auto" style="width: 18rem; cursor: pointer;">
                        <img class="card-img-top" src="img/img2.jpg" alt="Card image cap">
                        <div class="card-body bg-light">
                          <h5 class="card-title">Linguagens</h5>
                          <p class="card-text">Confira metodologias ativas para a disciplina de Linguagens.</p>
                          <a href="categoria.php?categoria=Linguagens" class="btn btn-success text-white">Confira</a>
                        </div>
                    </div>

                    <div class="card my-2 mx-auto" style="width: 18rem; cursor: pointer;">
                        <img class="card-img-top" src="img/img3.jpg" alt="Card image cap">
                        <div class="card-body bg-light">
                          <h5 class="card-title">Ciências humanas</h5>
                          <p class="card-text">Confira metodologias ativas para disciplinas de Ciências humanas.</p>
                          <a href="categoria.php?categoria=Ciências Humanas" class="btn btn-success text-white">Confira</a>
                        </div>
                    </div>

                    <div class="card my-2 mx-auto" style="width: 18rem; cursor: pointer;">
                        <img class="card-img-top" src="img/img4.jpg" alt="Card image cap">
                        <div class="card-body bg-light">
                          <h5 class="card-title">Ciências da natureza</h5>
                          <p class="card-text">Confira metodologias ativas para disciplinas de Ciências da natureza.</p>
                          <a href="categoria.php?categoria=Ciências da Natureza" class="btn btn-success text-white">Confira</a>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-center text-secondary mb-4">Grau de Escolaridade</h4>
            <div class="row d-flex flex-wrap">
                    <div class="card-body mx-auto ensino">
                        <a href="ensinoFundamental.php"><h6 class="card-title hover"><strong>Ensino Fundamental</strong></h6>
                        <img src="img/ensinoFundamental.png" alt="Metodologias Ativas para Ensino Fundamental"></a>
                    </div>
                    <div class="card-body mx-auto ensino desativado">
                        <h6 class="card-title"><strong>Ensino Médio</strong></h6>
                        <img src="img/ensinoMedio.png" alt="Card image cap">
                    </div>
                    <div class="card-body mx-auto ensino desativado">
                        <h6 class="card-title"><strong>EJA</strong></h6><br/>
                        <img src="img/ensinoEAD.png" alt="Card image cap">
                    </div>
                </div>
          </div>

<?php include_once "php/includes/footer.php"; ?>
<?php include_once "php/includes/final_html.php"; ?>
