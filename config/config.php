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

function paginate($mysqli, $table, $page, $perPage) {
    // Conta o total de registros na tabela
    $totalQuery = $mysqli->query("SELECT COUNT(*) as total FROM $table");
    $total = $totalQuery->fetch_assoc()['total'];
    
    // Calcula o total de páginas
    $totalPages = ceil($total / $perPage);
    
    // Calcula o offset para a consulta
    $offset = ($page - 1) * $perPage;
    
    // Recupera os registros da página atual
    $stmt = $mysqli->prepare("SELECT * FROM $table LIMIT ?, ?");
    $stmt->bind_param("ii", $offset, $perPage);
    $stmt->execute();
    $result = $stmt->get_result();
    $results = $result->fetch_all(MYSQLI_ASSOC);
    
    // Gera os links de navegação
    $pagination = "";
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $page) {
            $pagination .= "<strong>$i</strong> ";
        } else {
            $pagination .= "<a href=\"?page=$i\">$i</a> ";
        }
    }
    
    return [
        'results' => $results,
        'pagination' => $pagination
    ];
}

$sucesso = false;
$erro = false;
$msg = '';