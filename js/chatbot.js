function openchatbot() {
    var chatbot = document.getElementById("chat-contenedor"); // Reemplaza "parrafoId" con el ID real de tu párrafo

    if (chatbot.style.display === "none") {
        chatbot.style.display = "block";
    } else {
        chatbot.style.display = "none";
    }
}