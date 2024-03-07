// https://www.youtube.com/watch?v=757WTYQxVmc&t=231s&ab_channel=MauricioSevillaBritto

// Para que al pulsar en la imagen del bot, se abra el panel y si vulebes a hacer click se esconde
function openchatbot() {
  var chatbot = document.getElementById("chat-contenedor");

  if (chatbot.style.display === "none") {
      chatbot.style.display = "block";
  } else {
      chatbot.style.display = "none";
  }
}
// Espera a que el documento esté listo para ejecutar el código
$(document).ready(function() {
  $("#send-btn").on("click", function() {     // Asociamos el evento clic al botón de enviar
      $value = $("#data").val();                // Obtenemos el valor del campo de entrada

    // Creamos el mensaje del usuario y lo agregamos al contenedor del chat
      $msg = '<div class="user-inbox inbox user"><div class="msg-header"><p>Usuario: ' + $value + '</p></div></div>';
      $(".form").append($msg);

    // Limpiamos el campo de entrada
      $("#data").val('');


// Iniciamos la funcion ajax
      $.ajax({
          url: '_chatbot.php',
          type: 'POST',
          data: 'text=' + $value,
          success: function(result) {
              $replay = '<div class="bot-inbox inbox bot"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>Bot: ' + result + '</p></div></div>';
              $(".form").append($replay);

// Cuando hay muchas respuestas, la barra baja para ver las preguntas y respuestas anteriores
              $(".form").scrollTop($(".form")[0].scrollHeight);
          }
      });
  });
});