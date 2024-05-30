<?php
include "../config/config.php";

if (isset($_POST["acessar"])) {
    $username = $_POST["username"];
    $senha = $_POST["senha"];

    $q_busca_login = "SELECT cpf, senha FROM usuarios WHERE cpf = '$username' AND senha = '$senha'";
    $busca_login = $conn->query($q_busca_login);

    $quantidade = $busca_login->num_rows;
    echo $quantidade;
   
    if ($quantidade == 1) {
        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];

        header("Location: ../usuario/index.php");
    } else {
        echo "Falha ao logar! Email ou senha incorretos!";
    }
}

include "view.php";