<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "escola_ativa_v2";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn) {
        echo "Erro na conexão ao servidor ".mysqli_connect_error();
    }
?>