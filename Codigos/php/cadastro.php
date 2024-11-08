<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nomeCompleto'];
    $email = $_POST['emailUsuario'];
    $telefone = $_POST['telefoneUsuario'];
    $cpf = $_POST['cpfUsuario'];
    $senha = ($_POST['senhaUsuario']); // Hash da senha

    $stmt = $conn->prepare("INSERT INTO cadastro (nome, email, telefone, cpf, senha) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiis", $nome, $email,$telefone,$cpf, $senha);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso! <a href='entrar.html'>Faça login</a>";
    }elseif ($conn-> errno === 1062) {
        echo "Erro: este cadastro já existe!";
    } 
    else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }
}
?>