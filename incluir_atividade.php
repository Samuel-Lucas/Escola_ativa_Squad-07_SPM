<?php
        require_once "php/actions/conexao.php";
        include_once "php/includes/head.php";
        include_once "php/includes/header.php";
        include "php/actions/verifica_login.php";

        if(isset($_SESSION['erro_atividade'])) {
            echo "<script> alert('Faltam campos para Preencher')</script>";

            unset($_SESSION['erro_atividade']);
        }
?>      

    <div class="container">
        <div class="jumbotron-matematica my-4 d-flex align-items-center" style="background: url(img/atividade.jpg) no-repeat center">
    </div>

    <h3 class="text-center">Incluir atividade</h3>

    <div class="container mt-4 mb-5">

        <form action="php/actions/cadastrar_atividade.php" method="post" class="form-group form-incluir" name="form" onsubmit="return validaAtividade(this);">

            <label>Disciplina:</label><br>
            <select name="disciplina" class="form-control bg-gray">
                <option value="">Escolha uma disciplina</option>
                <option value="Linguagens">Linguagens</option>
                <option value="Ciências Humanas">Ciências Humanas</option>
                <option value="Matemática">Matemática</option>
                <option value="Ciências da Natureza">Ciências da Natureza</option>
            </select><br><br>

            <label>Metodologia:</label><br>

            <div class="d-flex flex-wrap justify-content-md-between justify-content-sm-around ">
                <span class="mx-3"><input type="radio" name="metodologia" value="Mão na massa"> Mão na Massa</span>
                <span class="mx-3"><input type="radio" name="metodologia" value="Sala invertida"> Sala de aula Invertida</span>
                <span class="mx-3"><input type="radio" name="metodologia" value="Aprendizagem em dupla"> Aprendizagem em Dupla</span>
                <span class="mx-3"><input type="radio" name="metodologia" value="Gameficação"> Gameficação</span>
                <span class="mx-3"><input type="radio" name="metodologia" value="Tecnologias criativas"> Tecnologias Criativas</span>
            </div><br><br>

            <span><label>Título: </label> <input type="text" name="titulo" class="form-control bg-gray"></span><br>

            <label>Descrição:</label>
            <textarea name="descricao" class="form-control bg-gray" cols="20" rows="5"></textarea>


            <h4 class="text-secondary mt-3">Anexos</h4><br>

            <span><label>Links: </label> <input placeholder="Links de Fontes" type="text" name="links" class="form-control bg-gray"></span><br>

            <span>Upload: Passo_a_Passo.pdf (Exemplo)</span><br><br><br>

            <div class="w-60 mb-4">
                <span><input type="checkbox" name="termo" value="1"> Declaro ser responsável pelo conteúdo da atividade
                enviada, haverá aprovação dos moderadores do conteúdo relacionado a relevância ao tema
                (EFO5MAO6), e ao uso de materiais de baixo ou nenhum custo agregado.</span>
            </div>

            <div class="container d-flex justify-content-between">
                <button class="btn btn-success" type="submit">Salvar</button>
                <a class="btn btn-danger text-white" href="painel.php">Cancelar</a>    
            </div>
        </form>
    </div>

<?php include_once "php/includes/final_html.php"; ?>