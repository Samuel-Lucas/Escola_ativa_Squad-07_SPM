<?php 
    require_once "conexao.php";

    session_start();

    if(empty($_POST['disciplina']) || empty($_POST['metodologia']) || empty($_POST['titulo'])
    || empty($_POST['descricao']) || empty($_POST['links']) || empty($_POST['termo'])) {

        $_SESSION['erro_atividade'] = true;
        header("Location: ../../incluir_atividade.php");
    }

    if(isset($_POST['disciplina']) && isset($_POST['metodologia']) && isset($_POST['titulo'])
    && isset($_POST['descricao']) && isset($_POST['links']) && isset($_POST['termo'])) {

        $disciplina = $_POST['disciplina'];
        $metodologia = $_POST['metodologia'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $links = $_POST['links'];
        $termo = $_POST['termo'];

        $id = $_SESSION['id_usuario'];

        $sql = "insert into atividades 
        values (null, '$disciplina', '$metodologia', '$titulo', '$descricao', '$links', '$termo', '$id')";

        mysqli_query($conn, $sql);

        $_SESSION['atividade_sucesso'] = true;
        
        header("Location: ../../painel.php");

    } 
?>