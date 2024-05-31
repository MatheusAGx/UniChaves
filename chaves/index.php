
<?php
include "../config/config.php";

$q_busca_chave = "SELECT * FROM chave";
$busca_chave = $conn->query($q_busca_chave);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 5;

$pagination = paginate($conn, 'chave', $page, $perPage);

include "view.php";