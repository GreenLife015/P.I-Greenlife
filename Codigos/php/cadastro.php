<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nomeCompleto'];
    $apelido = $_POST['nomeDeUsuario'];
    $email = $_POST['emailUsuario'];
    $telefone = $_POST['telefoneUsuario'];
    $cpf = $_POST['cpfUsuario'];
    $senha = ($_POST['senhaUsuario']); // Hash da senha

    $stmt = $conn->prepare("INSERT INTO cadastro (nome, apelido, email, telefone, cpf, senha) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiis", $nome,$apelido, $email,$telefone,$cpf, $senha);

    if ($stmt->execute()) {
       header(header: "location:  http://localhost/P.I-Greenlife/Codigos/entrar.html");     
    }elseif ($conn-> errno === 1062) {
        $cadastroExistente = "Erro: este cadastro já existe!";
        echo"<script>alert('$cadastroExistente');</script>";
    } 
    else {
        $msgErroCad = "'Erro ao cadastrar: ' . $stmt->error";
        echo "<script>alert($msgErroCad)</script>";
    }
}
?>