<?php
session_start(); // Inicia a sessão

// Verifica se o ID do usuário está armazenado na sessão
if (!isset($_SESSION['usuario']['id'])) {
    die("Você precisa estar logado para adicionar pontos.");
}

// Inclui o arquivo de conexão
include('conexao.php');

// Obtém o ID do usuário da sessão
$usuario_id = $_SESSION['usuario']['id'];
$pontos_a_adicionar = 10; // Número de pontos a ser adicionado

// Atualiza os pontos do usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE cadastro SET pontos = pontos + ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $pontos_a_adicionar, $usuario_id);
    $stmt->close();
}

$conn->close();
header("Location: http://localhost/P.I-Greenlife/codigos/greenInicio.html");
?>