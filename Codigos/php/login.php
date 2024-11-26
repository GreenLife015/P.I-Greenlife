<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['emailUsuario'];
    $senha = $_POST['senhaUsuario'];
    
    // Prepara a consulta SQL para verificar as credenciais
    $stmt = $conn->prepare("SELECT * FROM cadastro WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email , $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    if ($resultado->num_rows > 0) {
        // Se o usuário for encontrado, faz o login
        $usuario = $resultado->fetch_assoc();
        
        // Define os dados do usuário na sessão
        $_SESSION['usuario'] = [
            'id' => $usuario['id'],
            'nomeCompleto' => $usuario['nome'],
            'nomeDeUsuario' => $usuario['apelido'],
            'emailUsuario' => $usuario['email'],
            'cpfUsuario' => $usuario['cpf'],
            'telefoneUsuario' => $usuario['telefone'],
            'pontosUsuario' => $usuario['pontos'] // Armazena os pontos na sessão
        ];

        // Redireciona o usuário para a página de perfil
        header("Location: http://localhost/P.I-Greenlife/codigos/php/perfil.php");
        exit();
    } else {
        // Se as credenciais estiverem erradas, redireciona para a página de login
        header("Location: http://localhost/P.I-Greenlife/codigos/entrar.html");
        exit();
    }
}
?>