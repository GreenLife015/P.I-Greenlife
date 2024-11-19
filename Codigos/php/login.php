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
<<<<<<< HEAD
        $_SESSION['usuario'] = [
            'id' => $usuario['id'],
            'nomeCompleto' => $usuario['nome'],
            'nomeDeUsuario'=> $usuario['apelido'],
            'emailUsuario' => $usuario['email'],
            'cpfUsuario' => $usuario['cpf'],
            'telefoneUsuario' => $usuario['telefone']
            
        ];
        header("Location: http://localhost/P.I-Greenlife/codigos/php/perfil.php");
        exit();
=======
            $_SESSION['usuario'] = [
                'id' => $usuario['id'],
                'nomeCompleto' => $usuario['nome'],
                'emailUsuario' => $usuario['email'],
                'cpfUsuario' => $usuario['cpf'],
                'telefoneUsuario' => $usuario['telefone']
                
            ];
            header("Location: http://localhost/P.I-Greenlife/codigos/php/perfil.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
>>>>>>> 0119f3091f0f235b886e569fbbef6c6e86a39038
    } else {
        $msgErroSenha = "Senha incorreta!";
        echo "<script>alert($msgErroSenha)</script>";
    }
} else {
    echo "Usuário não encontrado!";
}
?>