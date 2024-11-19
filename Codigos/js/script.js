function mostrarMensagem() {
    var mensagem = document.getElementById("mensagem");
    var barra = document.getElementById("barra");

    // Exibe a mensagem e inicia a animação da barra
    mensagem.style.display = "block";

    // Após 3 segundos, esconde a mensagem
    setTimeout(function() {
        mensagem.style.display = "none";
    }, 3000); // 3000 milissegundos = 3 segundos
}