<?php
include "../config/config.php";

$q_busca_usuario = "SELECT *, (SELECT descricao FROM usuarios_tipo WHERE id = id_usuario_tipo) as tipo, (SELECT descricao FROM usuarios_instituicao WHERE id = id_instituicao) as instituicao  FROM usuarios";
$busca_usuario = $conn->query($q_busca_usuario);


include "view.php";