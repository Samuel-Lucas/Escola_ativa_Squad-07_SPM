<?php
    require_once "php/actions/conexao.php";
    include_once "php/includes/head.php";
    include_once "php/includes/header.php";
    include "php/actions/verifica_login.php";

    $id_tarefa = $_GET['idatividade'] ?? '';

    $sql = "select * from atividades where id_atividade = '$id_tarefa'";

    $result = $conn->query($sql);
    $dados = mysqli_fetch_assoc($result);
?>

    <h3 class="text-center mt-3">Editar atividade</h3>

    <div class="container mt-4 mb-5">

        <form action="php/actions/editar_atividade.php" method="post" class="form-group form-incluir" name="form" onsubmit="return validaEdicao(this);">

            <label>Disciplina:</label><br>
            <select name="disciplina" class="form-control bg-gray">
                <option value="<?= $dados['disciplina']; ?>"><?= $dados['disciplina']; ?></option>
                <option value="Linguagens">Linguagens</option>
                <option value="Ciências Humanas">Ciências Humanas</option>
                <option value="Matemática">Matemática</option>
                <option value="Ciências da Natureza">Ciências da Natureza</option>
            </select><br><br>

            <label>Metodologia:</label><br>

            <div class="d-flex flex-wrap justify-content-md-between justify-content-sm-around">
                <span class="mx-3"><input type="radio" name="metodologia" value="Mão na massa"> Mão na Massa</span>
                <span class="mx-3"><input type="radio" name="metodologia" value="Sala invertida"> Sala de aula Invertida</span>
                <span class="mx-3"><input type="radio" name="metodologia" value="Aprendizagem em dupla"> Aprendizagem em Dupla</span>
                <span class="mx-3"><input type="radio" name="metodologia" value="Gameficação"> Gameficação</span>
                <span class="mx-3"><input type="radio" name="metodologia" value="Tecnologias criativas"> Tecnologias Criativas</span>
            </div><br><br>

            <span><label>Título: </label> <input type="text" name="titulo" value="<?= $dados['titulo']; ?>" class="form-control bg-gray"></span><br>

            <label>Descrição:</label>
            <textarea name="descricao" class="form-control bg-gray" cols="20" rows="5"><?= $dados['descricao']; ?></textarea>

            <h4 class="text-secondary mt-3">Anexos</h4><br>

            <span><label>Links: </label> <input placeholder="Links de Fontes" value="<?= $dados['links']; ?>" type="text" name="links" class="form-control bg-gray"></span><br>

            <span>Upload: Passo_a_Passo.pdf (Exemplo)</span><br><br><br>

            <div class="container d-flex justify-content-between">
                <input class="btn btn-success" type="submit" value="Salvar Alterações" />
                <input type="hidden" name="id_atividade" value="<?= $dados['id_atividade']; ?>">
                <a class="btn btn-danger text-white" href="atividades_cadastradas.php">Cancelar</a>    
            </div>
        </form>
    </div>

    <script>

        window.onload = function() {
            // Auto complete item da metodologia
            let metodologiaEscolhida = "<?= $dados['metodologia']; ?>"
            let itens = document.getElementsByName('metodologia')

            for(let i = 0; i < itens.length; i++) {

                if(itens[i].value == metodologiaEscolhida) {
                    itens[i].checked = true
                }
            }

            // Remoção da duplicação na lista referente à disciplina escolhida
            let disciplinaEscolhida = "<?= $dados['disciplina']; ?>"
            let opcoes = document.getElementsByTagName('option')
            
            for(let j = 1; j < opcoes.length; j++) {

                if(opcoes[j].value == disciplinaEscolhida) {
                    opcoes[j].style.display = 'none'
                }
            }
        }

        function validaEdicao(form) {
            let titulo = form.titulo.value
            let descricao = form.descricao.value
            let links = form.links.value

            if(titulo == "") {
                alert("Preenca o título da atividade")
                form.titulo.focus()
                return false
            }

            if (titulo.length > 30) {
                alert('Limite máximo de caracteres para o título ultrapassado.')
                form.titulo.focus()
                return false
            }

            if(descricao == "") {
                alert("Preenca a descrição da atividade")
                form.descricao.focus()
                return false
            }

            if (descricao.length > 5000) {
                alert('Limite máximo de caracteres para a descrição ultrapassado.')
                form.descricao.focus()
                return false
            }

            if(links == "") {
                alert("Informe links de referências")
                form.links.focus()
                return false
            }

            if (links.length > 100) {
                alert('Limite máximo de caracteres para as referências ultrapassado.')
                form.links.focus()
                return false
            }
        }
    </script>

<?php include_once "php/includes/footer.php"; ?>
<?php include_once "php/includes/final_html.php"; ?>