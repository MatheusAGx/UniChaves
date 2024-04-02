<?php
include "../config/config.php";

$q_busca_chave = "SELECT * FROM cl203168.chave";
$busca_chave = $conn->query($q_busca_chave);


include "view.php";