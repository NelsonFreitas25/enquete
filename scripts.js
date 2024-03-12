document.getElementById("myForm").addEventListener("submit", function (event) {
    event.preventDefault();

    // Desabilitar o botão de envio
    document.getElementById("submitButton").disabled = true;

    // Exibir overlay e mensagem de envio
    document.getElementById("overlay").style.display = "block";
    document.getElementById("loadingBox").style.display = "block";

    // Simular envio do formulário
    var formData = new FormData(this);
    fetch(this.action, {
        method: this.method,
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        // Ocultar overlay e mensagem de envio
        document.getElementById("overlay").style.display = "none";
        document.getElementById("loadingBox").style.display = "none";

        // Exibir mensagem de sucesso ou erro
        if (result === "success") {
            document.getElementById("successBox").style.display = "block";
        } else {
            document.getElementById("errorBox").style.display = "block";
        }
    })
    .catch(error => {
        console.error('Erro:', error);

        // Ocultar overlay e mensagem de envio
        document.getElementById("overlay").style.display = "none";
        document.getElementById("loadingBox").style.display = "none";

        // Exibir mensagem de erro
        document.getElementById("errorBox").style.display = "block";
    });
});
