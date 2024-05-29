<?php
$servername = "143.106.241.3";
$username = "cl203168";
$password = "cl*15061998";
$database = "cl203168";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

