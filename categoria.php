<?php
    require_once "php/actions/conexao.php";
    include_once "php/includes/head.php";
    include_once "php/includes/header.php";

    $categoria = $_GET['categoria'];

    $sql = "select atividades.disciplina, atividades.metodologia, atividades.titulo,
    atividades.descricao, atividades.links, usuarios.nome from atividades join usuarios
    on usuarios.id_usuario = atividades.autor where atividades.disciplina = '$categoria';";

    $result = $conn->query($sql);

    while($row = mysqli_fetch_assoc($result)) {

?>

    <div class="container d-flex justify-content-center mt-5 mb-4">
            <div class="card border" style="width: 50rem; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                <div class="container d-flex justify-content-end mt-2">
                    <p>Publicado por: <a href="#"><?php echo $row['nome']; ?></a></p>
                </div>

                <h4 class="text-center mt-3">Disciplina: <?php echo $row['disciplina']; ?></h4>

                <h5 class="text-center">Metodologia: <?php echo $row['metodologia']; ?></h5>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['titulo']; ?></h5>
                    <p class="card-text"><?php echo $row['descricao']; ?></p>

                    <div class="container d-flex justify-content-between p-0">
                        <textarea cols="16" rows="3" disabled><?php echo $row['links']; ?></textarea>
                        <img src="img/pdf.png" style="cursor: pointer;" width="60" height="70">
                    </div>
    
                </div>
            </div>
        </div>

    <?php } ?>
