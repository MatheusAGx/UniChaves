<?php
include "../config/config.php";

$q_busca_usuario = "SELECT * FROM usuarios";
$busca_usuario = $conn->query($q_busca_usuario);


include "view.php";