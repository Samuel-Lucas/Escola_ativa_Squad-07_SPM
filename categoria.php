<?php
    require_once "php/actions/conexao.php";
    include_once "php/includes/head.php";
    include_once "php/includes/header.php";

    $categoria = $_GET['categoria'];

?>

    <h3 class="text-center text-secondary mt-3">Metodologias para <?php echo $categoria; ?></h3>

    <div class="container d-flex justify-content-center mb-4 pt-4" style="min-height: 450px;">

    <table class="table table-hover mt-4">
        <thead style="background: #ff8533; color: #fff;">
            <tr>
                <th scope="col">Metodologia Ativa</th>
                <th scope="col">Título da atividade</th>
                <th scope="col">Autor</th>
            </tr>
        </thead>

        <tbody>
<?php

    $sql = "select atividades.id_atividade, atividades.disciplina, atividades.metodologia, atividades.titulo,
    atividades.descricao, atividades.links, usuarios.nome, usuarios.sobrenome from atividades join usuarios
    on usuarios.id_usuario = atividades.autor where atividades.disciplina = '$categoria'
    order by atividades.id_atividade desc;";

    $result = $conn->query($sql);

    while($row = mysqli_fetch_assoc($result)) {

?>

            <tr>
                <td><?php echo $row['metodologia']; ?></td>
                <td><a href="detalhe.php?idatividade=<?php echo $row['id_atividade']; ?>" class="text-primary"><?php echo $row['titulo']; ?></a></td>
                <td><a href="#" class="text-info"><?php echo $row['nome'].' '.$row['sobrenome']; ?></a></td>
            </tr>
    
    <?php } ?>

            </tbody>
        </table>
    </div>

<?php  
    include_once "php/includes/footer.php"; 
    include_once "php/includes/final_html.php"; 
?>