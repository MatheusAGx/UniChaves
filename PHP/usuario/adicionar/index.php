<?php
include "../../config/config.php";

$q_busca_tipo = "SELECT * FROM usuarios_tipo";
$busca_tipo = $conn->query($q_busca_tipo);

$q_busca_intituicao = "SELECT * FROM usuarios_instituicao";
$busca_instituicao = $conn->query($q_busca_intituicao);

if (isset($_POST['cadastrar'])) {

    $nome = $_POST['nome'];
    $instituicao = $_POST['instituicao'];
    $senhas = $_POST['senha'];
    $confirm_senha = $_POST['confirma-senha'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $tel2 = $_POST['tel2'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero_casa = $_POST['numero_casa'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $tipo = $_POST['tipo'];
    /*$instituicao = $_POST['instituicao'];
    $descricao = $_POST['descricao'];*/

    /* id_usuario = $_SESSION['id']; */
    $senha = sha1($senhas);


    $q_insert_chave = "INSERT INTO cl203168.usuarios (nome, senha, cpf, cnpj, email, telefone, endereco, bairro, cep, numero, cidade, uf, id_instituicao, id_usuario_tipo) VALUES ('$nome', '$senha', '$cpf', '$cnpj', '$email', '$tel', '$endereco', '$bairro', '$cep', '$numero_casa', '$cidade', '$uf', '$id_instituicao', '$tipo')";
    $inset_chave = $conn->query($q_insert_chave);

}

include "view.php";

