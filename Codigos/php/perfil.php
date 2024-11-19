<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location: perfil.php");
    header("Locarion: greeninicio.html");
    exit();
}
$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        @media (min-width: 320px) and (max-width: 1024px){
    body{
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
    }
    header {
        background-color: #1B632B;
        width: 100%;
        display: grid;
      justify-content: center;
        
    }
    
    .logo-principal {
    margin: 5px;
    padding: 3px;
    text-align: center;
    
}
.img-cabecalho{
    position: relative;
    width: 100%;
    margin-top: 15px;
    margin-left: 5%;
   
}
.imgPerfil{
    width: 90%;
}
.imgLogo{
    position: absolute;
    top: 15%;
    left: 45%;
    width: 10%;
    opacity: 0.9;
    background-color: aliceblue;
    border-radius: 50px;
}
.nome-usuario{
    text-align: center;
    
}
.dados{
    background-color: #D9D9D9;
    width: 85%;
    margin: 0 auto;
    display: block ;
    border-radius: 15px;
}
.dados div{
    display: flex;
    padding: 10px;
}
.dados i{
    width: 10%;
   margin: 4px;
}
.dados p{
    text-align: center;
    margin: 5px;
}
.cad{
    display: flex; /* Ativa o flexbox */
    justify-content: space-between; /* Espaça os elementos da esquerda e direita */
    align-items: center; /* Alinha verticalmente os elementos */
    padding: 10px; /* Adiciona espaçamento interno */
}
.cad a{
    text-decoration: none;
    color: #1B632B;
    font-weight: bold;
}
.sair {
    text-align: right; /* Alinha o texto na direita */
    margin-left: auto; /* Empurra o link "Sair" para o canto direito */
}
.sair a{
    text-decoration: none;
    color: #1B632B;
    margin-right: 0px;
    font-weight: bold;
}
.cadastro{
   margin-left: 10px;
}
.dados-pessoais{
    margin: 5px;
}

.entrar button{
    border: 1px black solid;
    border-radius: 5px;
    background-color: #1B632B;
    color: black;
    height: 2rem;
    font-size: 1rem;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    font-weight: bold;
    width: 90%;
}
.entrar{
    margin: auto;
    text-align: center;
    margin: 15px;
}
.tit-redes{
    text-align: center;
    
}
.img-rede{
    display: flex;
    justify-content: center;
}
.img-rede img{
    padding: 15px;
    text-align: center;
  
}
.frase{
    text-align: center;
}
.spacer{
    padding-bottom: 75px;
}
footer{
    width: 100%;
    background-color: #1B632B;
    height: 50px;
    position: fixed ;
    right: 0;
    bottom: 0;
}   
.rodape{
    display: flex;
    align-items: center;
    align-items: center;
    justify-content: center;

}
.rodape img{
    display: inline-flex;
    padding: 25px;
    padding-top: 5px;
}
}
    </style>
    <title>GreenLife</title>
</head>
<body>
<header>
        <a href="../greeninicio.html">
            <img src="../imagens/GreenLife-Sem-Fundo-Sem-Escrita%201.png" alt="Logo do GreenLife" class="logo-principal">
        </a>
    </header>
    <div class="img-cabecalho">
        <img src="../imagens/fundo-perfil.png" alt="Fundo do Perfil" class="imgPerfil">
    </div>
    <img src="../imagens/menina-perfil.webp" alt="Menina Perfil" class="imgLogo">

    <div class="nome-usuario">
        <br>
    <?php echo htmlspecialchars($usuario['nomeDeUsuario']); ?>
    </div>
    <br>
    <hr width="75%">
    <br>
    <div class="dados">
        <div class="cad">
            <p class="dados-pessoais">Dados Pessoais:</p>
            <p class="cadastro"><a href="../cadastro.html">Cadastrar-se</a></p>
        </div>
        <div>
        <i class="fa-solid fa-user"></i>
            <?php echo htmlspecialchars($usuario['nomeCompleto']); ?>
        </div>
        <div>
        <i class="fa-solid fa-envelope"></i>
            <?php echo htmlspecialchars($usuario['emailUsuario']); ?>
        </div>
        <div>
        <i class="fa-solid fa-address-card"></i>
            <?php echo $usuario['cpfUsuario']; ?>
        </div>
        <div>
        <i class="fa-solid fa-phone"></i>
            <?php echo $usuario['telefoneUsuario']; ?>
        </div>
        <div class="sair">
            <a href="logout.php">Sair</a>
        </div>
    </div>
<br>

    <div class="entrar">
        <a href="../entrar.html">
            <button>ENTRAR</button>
        </a>
    </div>
    <br>
    
    <hr width="75%">

    <h5 class="tit-redes">REDES SOCIAIS</h5>
    <div class="img-rede">
        <div><img src="../imagens/logotwt.png" alt="Twitter"></div>
        <div><img src="../imagens/logotktk.png" alt="TikTok"></div>
        <div><img src="../imagens/logoinsta.png" alt="Instagram"></div>
    </div>
    <p class="frase">É UM PRAZER TER VOCÊ CONOSCO!!</p>
    <div class="spacer"></div>
    <footer>
        <div class="rodape">
            <a href="../greeninicio.html"><img src="../imagens/logoinicio.png" alt="Home"></a>
            <a href="../greenDesafios.html"><img src="../imagens/logodesafio.png" alt="Desafios"></a>
            <a href="../blog.html"><img src="../imagens/logoblog.png" alt="Blog"></a>
            <a href="../mapa.html"><img src="../imagens/logomapa.png" alt="Mapa"></a>
            <a href="../perfil.html"><img src="../imagens/logoperfil.png" alt="Perfil"></a>
        </div>
    </footer>
</body>
</html>