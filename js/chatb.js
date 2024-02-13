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

function getBotResponse(userMessage) {
  return "Bot: " + userMessage;
}

function getBotResponse(userMessage) {
const lowerCaseMessage = userMessage.toLowerCase();

if (lowerCaseMessage.includes('hola')) {
  return 'Hola, ¿cómo estás?';
} else if (lowerCaseMessage.includes('adios')||lowerCaseMessage.includes('adiós')) {
  return 'Hasta luego, que tenga buen día.';
} else if (lowerCaseMessage.includes('gracias')){
  return 'De nada, estoy aquí para ayudarte.';
} else if (lowerCaseMessage.includes('horarios')) {
  return 'Los horarios de los diferentes departamentos del hospital son los siguientes:\n\n- Departamento de cardiología: Lunes a viernes de 8:00 a 16:00.\n- Departamento de pediatría: Lunes a viernes de 8:00 a 16:00.\n- Departamento de neurología: Lunes a viernes de 8:00 a 16:00.\n- Departamento de ginecología: Lunes a viernes de 8:00 a 16:00.\n- Departamento de traumatología: Lunes a viernes de 8:00 a 16:00.\n- Departamento de cirugía: Lunes a viernes de 8:00 a 16:00.';
} else if (lowerCaseMessage.includes('ubicacion')||lowerCaseMessage.includes('ubicación')) {
  return 'Las ubicaciones de los diferentes departamentos del hospital son las siguientes:\n\n- Departamento de cardiología: Sala 101, 111 y 115.\n- Departamento de neurología: Sala 102, 112 y 116.\n- Departamento de traumatología: Sala 103, 113 y 117.\n- Departamento de oncología: Sala 104, 114 y 118.\n- Departamento de traumatología: Sala 105.\n- Departamento de cirugía: Sala 106.';
} else if (lowerCaseMessage.includes('contacto')) {
  return 'Los contactos de los diferentes departamentos del hospital son los siguientes:\n\n- Departamento de oncología: Dr. Nicolás Urioitia, Tel: +34 911 23 45 17.\n- Departamento de cardiología: Dr. Fernando Alonso, Tel: +34 911 23 45 67.\n- Departamento de traumatología: Dr. Felipe Gimenez, Tel: +34 911 23 45 89.\n- Departamento de naurología: Dr. Fran Gonzalez, Tel: +34 911 23 45 42.';
} else {
  return 'Lo siento, no entiendo lo que dices. Por favor, intentalo de nuevo.';
}
}

function openchatbot() {
  var chatbot = document.getElementById("chat-contenedor"); // Reemplaza "parrafoId" con el ID real de tu párrafo

  if (chatbot.style.display === "none") {
      chatbot.style.display = "block";
  } else {
      chatbot.style.display = "none";
  }
}