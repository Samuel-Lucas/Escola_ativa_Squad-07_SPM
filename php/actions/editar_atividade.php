<?php
    session_start();

    require_once "conexao.php";

    if(isset($_POST['disciplina']) && isset($_POST['metodologia'])  && isset($_POST['titulo'])
    && isset($_POST['descricao']) && isset($_POST['links'])) {

        $id_atividade = $_POST['id_atividade'];
        $disciplina = $_POST['disciplina'];
        $metodologia = $_POST['metodologia'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $links = $_POST['links'];


        $sql = "update atividades set disciplina = '$disciplina', metodologia = '$metodologia', titulo = '$titulo',
        descricao = '$descricao', links = '$links' where id_atividade = '$id_atividade'";

        mysqli_query($conn, $sql);

        $_SESSION['edicao_sucesso'] = true;
        
        header("Location: ../../atividades_cadastradas.php");
    } 
?>