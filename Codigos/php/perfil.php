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
.dados img{
    width: 10%;
   margin: 4px;
    
}
.dados p{
    text-align: center;
    margin: 5px  ;
}
.cad{
    display: flex;
}
.cadastro{
  
   margin: 4px;
}
.dados-pessoais{
    margin: 5px;
}

.entrar button{
    background-color: #1B632B;
    border: 0.1px solid black;
    border-radius: 5px;
    width: 90%;
    height: 60%;
    margin: auto;
    text-align: center;
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
        <a href="greeninicio.html"><img src="imagens/GreenLife-Sem-Fundo-Sem-Escrita 1.png" alt="Logo do GreenLife" class="logo-principal"><a>
    </header>
    <div class="img-cabecalho">
    <img src="/Codigos/imagens/fundo-perfil.png" alt="" class="imgPerfil"></div>
    <img src="imagens/menina-perfil.webp" alt="" class="imgLogo">

<div class="nome-usuario">
    <p>NOME</p>
</div>
    <hr width="75%">
    <div class="dados">
        <div class="cad">
    <p class="dados-pessoais">Dados Pessoais:</p>
    <p class="cadastro">Cadastrar-se</p>
</div>
    <div><img src="imagens/logonome.png" alt="nome"><?php echo htmlspecialchars($usuario['nomeCompleto']);?></div>
    <div><img src="imagens/logoemail.png" alt="email"><?php echo htmlspecialchars($usuario['emailUsuario']);?></div>
    <div><img src="imagens/logocpf.png" alt="cpf"><?php echo $usuario['cpfUsuario'];?></div>
    <div><img src="imagens/logotelefone.png" alt="telefone"><?php echo $usuario['telefoneUsuario'];?></div>
    <a href="logout.php">Sair</a>
</div>

<div class="entrar">
    <a href="entrar.html"><button>ENTRAR</button></a>
</div>
    <hr width="75%">

    <h5 class="tit-redes">REDES SOCIAIS</h5>
    <div class="img-rede">
    <div><img src="imagens/logotwt.png" alt=""></div>
    <div><img src="imagens/logotktk.png" alt=""></div>
    <div><img src="imagens/logoinsta.png" alt=""></div>
</div>
    <p class="frase">É UM PRAZER TER VOCÊ CONOSCO!!</p>
    <div class="spacer"></div>
    <footer>
        <div class="rodape">
           <a href="greeninicio.html"><img src="imagens/logoinicio.png" alt="home"></a> 
            <a href="greenDesafios.html"><img src="imagens/logodesafio.png" alt="desafio"> </a>
            <a href="blog.html"><img src="imagens/logoblog.png" alt="blog"></a>
            <a href="mapa.html"><img src="imagens/logomapa.png" alt="mapa"></a>
            <a href="perfil.html"><img src="imagens/logoperfil.png" alt="pessoal"></a>
        </div>
    </footer>
</body>
</html>