<?php
    require_once "php/actions/conexao.php";
    include_once "php/includes/head.php";
    include_once "php/includes/header.php";

    $id_tarefa = $_GET['idatividade'] ?? '';

    $sql = "select atividades.disciplina, atividades.metodologia, atividades.titulo,
    atividades.descricao, atividades.links, usuarios.nome, usuarios.sobrenome from atividades join usuarios
    on usuarios.id_usuario = atividades.autor where atividades.id_atividade = '$id_tarefa'";

    $result = $conn->query($sql);
    $dados = mysqli_fetch_assoc($result);
?>

    <div class="container" style="min-height: 500px;">
        <div class="container d-flex justify-content-center mt-5 mb-4">
        
            <div class="card border" style="width: 50rem; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                <div class="container d-flex justify-content-end" style="background-color: #f2f2f2">
                    <p class="pt-3">Publicado por: <a href="#" class="text-info"><?php echo $dados['nome'].' '.$dados['sobrenome']; ?></a></p>
                </div>

                <div style="background-color: #00b300">
                    <h4 class="text-center text-white mt-3">Disciplina: <?php echo $dados['disciplina']; ?></h4>
                </div>

                <div style="background-color: #00cc00">
                    <h5 class="text-center text-white p-1">Metodologia: <?php echo $dados['metodologia']; ?></h5>
                </div>

                <div class="card-body">
                    <h5 class="card-title"><?php echo $dados['titulo']; ?></h5>
                    <p class="card-text"><?php echo $dados['descricao']; ?></p>

                    <div class="container d-flex justify-content-between p-0">
                        <textarea cols="25" rows="3" disabled><?php echo $dados['links']; ?></textarea>
                        <img src="img/pdf.png" style="cursor: pointer;" width="60" height="70">
                    </div>
    
                </div>
            </div>
        </div>
    </div>

<?php  
    include_once "php/includes/footer.php"; 
    include_once "php/includes/final_html.php"; 
?>