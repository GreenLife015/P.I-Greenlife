<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'green_life';

$conn = new mysqli($host,$usuario,$senha,$banco);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}else {
    header("Location: http://localhost/P.I-Greenlife/Codigos/entrar.html");
    $msgErroSenha = "Senha incorreta!";
    echo "<script>alert($msgErroSenha)</script>";
}
?>
