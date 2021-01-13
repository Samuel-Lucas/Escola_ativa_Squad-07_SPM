<?php
    require_once "php/actions/conexao.php";
    include_once "php/includes/head.php";
    include_once "php/includes/header.php";

 //   $id = $_GET['id'] ?? '';
    $id_tarefa = $_GET['idatividade'] ?? '';

    $sql = "select * from atividades where id_atividade = '$id_tarefa'";

    $result = $conn->query($sql);
    $dados = mysqli_fetch_assoc($result);
?>

    <h3 class="text-center">Editar atividade</h3>

    <div class="container mt-4 mb-5">

        <form action="php/actions/editar_atividade.php" method="post" class="form-group">

            <label>Disciplina:</label><br>
            <select name="disciplina" class="form-control bg-gray">
                <option value="<?= $dados['disciplina']; ?>"><?= $dados['disciplina']; ?></option>
                <option value="Linguagens">Linguagens</option>
                <option value="Ciências Humanas">Ciências Humanas</option>
                <option value="Matemática">Matemática</option>
                <option value="Ciências da Natureza">Ciências da Natureza</option>
            </select><br><br>

            <label>Metodologia</label><br>

            <div class="d-flex flex-wrap justify-content-md-between justify-content-sm-around">
                <span><input type="radio" name="metodologia" value="Mão na massa"> Mão na Massa</span>
                <span><input type="radio" name="metodologia" value="Sala invertida"> Sala de aula Invertida</span>
                <span><input type="radio" name="metodologia" value="Aprendizagem em dupla"> Aprendizagem em Dupla</span>
                <span><input type="radio" name="metodologia" value="Gameficação"> Gameficação</span>
                <span><input type="radio" name="metodologia" value="Tecnologias criativas"> Tecnologias Criativas</span>
            </div><br><br>

            <span><label>Título: </label> <input type="text" name="titulo" value="<?= $dados['titulo']; ?>" class="form-control bg-gray"></span><br>

            <label>Descrição:</label>
            <textarea name="descricao" class="form-control bg-gray" cols="20" rows="5"><?= $dados['descricao']; ?></textarea>

            <h4 class="text-secondary mt-3">Anexos</h4><br>

            <span><label>Links: </label> <input placeholder="Links de Fontes" value="<?= $dados['links']; ?>" type="text" name="links" class="form-control bg-gray"></span><br>

            <span>Upload: Passo_a_Passo.pdf (Exemplo)</span><br><br><br>

            <div class="container d-flex justify-content-between">
                <button class="btn btn-success" type="submit">Salvar Alterações</button>
                <input type="hidden" name="id_atividade" value="<?= $dados['id_atividade']; ?>">
                <a class="btn btn-danger text-white" href="atividades_cadastradas.php">Cancelar</a>    
            </div>
        </form>
    </div>

<?php include_once "php/includes/footer.php"; ?>
<?php include_once "php/includes/final_html.php"; ?>