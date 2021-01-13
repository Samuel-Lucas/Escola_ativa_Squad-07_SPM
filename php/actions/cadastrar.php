<?php
    session_start();

    require_once "conexao.php";

    if(isset($_POST['nome']) &&  isset($_POST['sobrenome']) &&  isset($_POST['genero']) && isset($_POST['perfil'])
    && isset($_POST['email']) && isset($_POST['senha'])) {
        
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $genero = $_POST['genero'];
        $perfil = $_POST['perfil'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Verificando email repetido
        $sql_email = "select email from usuarios";
        $result = $conn->query($sql_email);

        while($rows = $result->fetch_assoc()) {
            
            if($email == $rows['email']) {
                $_SESSION['igual'] = true;
                header("Location: ../../cadastro.php");
                exit();
            }
        }

        $sql = "insert into usuarios (id_usuario, nome, sobrenome, genero, perfil, email, senha)
        values (null, '$nome', '$sobrenome', '$genero', '$perfil', '$email', md5('$senha'))";

        if ($conn->query($sql) === TRUE) {

            $_SESSION['sucesso'] = true;
            header("Location: ../../login.php");
        } else {
            echo "Erro ao cadastrar: " . $sql . "<br>" . $conn->error;
        }
    } else {

        header("Location: ../../cadastro.php");
    }
?>