<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nomeUsuario'];
    $email = $_POST['emailUsuario'];
    $telefone = $_POST['telefoneUsuario'];
    $cpf = $_POST['cpfUsuario'];
    $senha = password_hash($_POST['senhaUsuario'], PASSWORD_DEFAULT); // Hash da senha

    $stmt = $conn->prepare("INSERT INTO cadastro (nome, email, telefone, cpf, senha) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email,$telefone,$cpf, $senha);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso! <a href='login.html'>Faça login</a>";
    }elseif ($conn-> errno === 1062) {
        echo "Erro: este cadastro já existe!";
    } 
    else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }
}
?>