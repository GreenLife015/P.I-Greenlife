<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['emailUsuario'];
    $senha = $_POST['senhaUsuario'];

    $stmt = $conn->prepare("SELECT * FROM cadastro WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email , $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        // Verifica a senha
            $_SESSION['usuario'] = [
                'id' => $usuario['id'],
                'nomeCompleto' => $usuario['nomeCompleto'],
                'emailUsuario' => $usuario['emailUsuario']
            ];
            header("Location: perfil.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
?>