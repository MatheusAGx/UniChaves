<?php
include "../../config/config.php";

$id = $_GET['id'];

if (isset($_POST['cadastrar'])) {

    $nome = $_POST['nome'];
    $instituicao = $_POST['instituicao'];
    $senhas = $_POST['senha'];
    $confirm_senha = $_POST['confirma-senha'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero_casa = $_POST['numero_casa'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $tipo = $_POST['tipo'];

    /* id_usuario = $_SESSION['id']; */
    $senha = sha1($senhas);

    $q_update = "UPDATE cl203168.usuarios SET 
        nome = '$nome',
        senha = '$senha',
        cpf = '$cpf',
        cnpj = '$cnpj',
        email = '$email',
        telefone = '$tel',
        endereco = '$endereco',
        bairro = '$bairro',
        cep = '$cep',
        numero = '$numero_casa',
        cidade = '$cidade',
        uf = '$uf',
        id_instituicao = '$instituicao',
        id_usuario_tipo = '$tipo',
        complemento = '$complemento'
     WHERE id = '$id' ";

    $update = $conn->query($q_update);
}

$q_buscar_usuario = "SELECT *, (SELECT descricao FROM usuarios_tipo WHERE id = id_usuario_tipo) as tipo, (SELECT descricao FROM usuarios_instituicao WHERE id = id_instituicao) as instituicao  FROM usuarios WHERE id = '$id' ";
$busca_usuario = $conn->query($q_buscar_usuario);

$q_busca_intituicao = "SELECT * FROM usuarios_instituicao";
$busca_instituicao = $conn->query($q_busca_intituicao);

$q_busca_tipo = "SELECT * FROM usuarios_tipo";
$busca_tipo = $conn->query($q_busca_tipo);

include "view.php";
