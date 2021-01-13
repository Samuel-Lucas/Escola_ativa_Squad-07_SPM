<?php
    session_start();

    require_once "conexao.php";

        $id_atividade = $_POST['excluiatividade'];

        $sql = "delete from atividades where id_atividade = '$id_atividade'";

        if(mysqli_query($conn, $sql)) {
            $_SESSION['excluiu'] = true;
        }

        header("Location: ../../atividades_cadastradas.php");
?>