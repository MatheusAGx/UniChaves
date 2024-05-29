<?php
include "../../config/config.php";

if (isset($_POST['cadastrar'])) {

    $nome = $_POST['nome'];
    $instituicao = $_POST['instituicao'];
    $descricao = $_POST['descricao'];

    /* id_usuario = $_SESSION['id']; */

    $q_insert_chave = "INSERT INTO cl203168.chave (nome, descricao, instituicao, id_status, id_usuario) VALUES ('$nome', '$descricao', '$instituicao', 1, 1)";
    $inset_chave = $conn->query($q_insert_chave);

}

include "view.php";
