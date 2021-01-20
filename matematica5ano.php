<?php include_once "php/includes/head.php"; ?>
<?php include_once "php/includes/header.php"; ?>

        <div class="container mb-4">
            <div class="jumbotron my-4 d-flex align-items-center" style="background: url(img/atividade.jpg) no-repeat"></div>
            <div id="container-historia">
            <a href="ensinoFundamental.php"><h3 class="text-secondary mb-4"> Matemática > 5ºano </h3><br/></a>
                <p class="ml-1 area_conhecimento conteudo" onclick="selecionaMateria('Números')">Números</p>
            <div class="box_materia" id="Números" style="display:none;">
                <div id="container_anoLetivo">
                    <a href="fracao.php"><p class="primeira_linha">Representação fracionária dos números racionais</p></a>
                    <p class="primeira_linha desativado">Problemas: adição e subtração de números naturais e números racionais cuja representação decimal é finita</p>
                </div>
            </div><br/>
            <p class="ml-1 area_conhecimento conteudo desativado" onclick="selecionaMateria('Álgebra')">Álgebra</p>
            <div class="box_materia" id="Álgebra" style="display:none;">
                <div id="container_anoLetivo">
                    <label></label>
                </div>
            </div><br/>
            <p class="ml-1 area_conhecimento conteudo" onclick="selecionaMateria('Geometria')">Geometria</p>
            <div class="box_materia" id="Geometria" style="display:none;">
                <div id="container_anoLetivo">
                <a href="geometria.php"><p class="primeira_linha">Figuras geométricas planas: reconhecimento do formato das faces de figuras geométricas espaciais</p></a>
                </div>
            </div><br/>
            </div>
        </div>

<?php include_once "php/includes/footer.php"; ?>
<?php include_once "php/includes/final_html.php"; ?>