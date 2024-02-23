/*https://youtu.be/nRF4HrUoAh4?si=9deMtFIWkZn4P6jK*/    /*https://stackoverflow.com/questions/12491182/how-to-send-user-data-using-sendmessage-function*/
const chatMessages = document.getElementById('chat-mensaje');
const userInput = document.getElementById('usuario-input');

function sendMessage() {
  const userMessage = userInput.value;
  appendMessage('user', userMessage);
  const botResponse = getBotResponse(userMessage);
  appendMessage('bot', botResponse);
  userInput.value = '';
}

function appendMessage(sender, message) {
  const messageElement = document.createElement('div');
  messageElement.classList.add(sender);
  messageElement.textContent = message;
  chatMessages.appendChild(messageElement);
  chatMessages.scrollTop = chatMessages.scrollHeight;
}

function fetchBotResponse(userMessage) {
  return fetch('bot_response.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ userMessage: userMessage }),
  })
    .then(response => {
      if (!response.ok) {
        throw new Error('Error en la solicitud AJAX');
      }
      return response.json();
    })
    .then(data => {
      return data.botResponse;
    });
}


function openchatbot() {
  var chatbot = document.getElementById("chat-contenedor");

  if (chatbot.style.display === "none") {
      chatbot.style.display = "block";
  } else {
      chatbot.style.display = "none";
  }
}