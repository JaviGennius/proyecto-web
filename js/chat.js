  /*https://youtu.be/nRF4HrUoAh4?si=9deMtFIWkZn4P6jK*/    /*https://stackoverflow.com/questions/12491182/how-to-send-user-data-using-sendmessage-function*/
  const chatMessages = document.getElementById('chat-mensajes');
  const userInput = document.getElementById('usuario-input');

  function enviarmensaje() {
    const UserMensage = userInput.value;
    appendMessage('user', UserMensage);
    const botResponse = getBotResponse(UserMensage);
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

  function getBotResponse(UserMensage) {
    return "Bot: " + UserMensage;
  }

  function getBotResponse(UserMensage) {
  const lowerCaseMessage = UserMensage.toLowerCase();

  if (lowerCaseMessage.includes('hola')) {
    return 'Hola, ¿cómo estás?';
  } else if (lowerCaseMessage.includes('adios')) {
    return 'Hasta luego, que tenga buen día.';
  } else if (lowerCaseMessage.includes('gracias')) {
    return 'De nada, estoy aquí para ayudarte.';
  } else if (lowerCaseMessage.includes('horarios')) {
    return 'Los horarios de los diferentes departamentos del hospital son los siguientes:\n\n- Departamento de cardiología: Lunes a viernes de 8:00 a 16:00.\n- Departamento de pediatría: Lunes a viernes de 8:00 a 16:00.\n- Departamento de neurología: Lunes a viernes de 8:00 a 16:00.\n- Departamento de ginecología: Lunes a viernes de 8:00 a 16:00.\n- Departamento de traumatología: Lunes a viernes de 8:00 a 16:00.\n- Departamento de cirugía: Lunes a viernes de 8:00 a 16:00.';
  } else if (lowerCaseMessage.includes('ubicación')) {
    return 'Las ubicaciones de los diferentes departamentos del hospital son las siguientes:\n\n- Departamento de cardiología: Sala 101.\n- Departamento de pediatría: Sala 102.\n- Departamento de neurología: Sala 103.\n- Departamento de ginecología: Sala 104.\n- Departamento de traumatología: Sala 105.\n- Departamento de cirugía: Sala 106.';
  } else if (lowerCaseMessage.includes('contacto')) {
    return 'Los contactos de los diferentes departamentos del hospital son los siguientes:\n\n- Departamento de oncología: Dr. Nicolás Urioitia, Tel: +34 911 23 45 17.\n- Departamento de cardiología: Dr. Fernando Alonso, Tel: +34 911 23 45 67.\n- Departamento de traumatología: Dr. Felipe Gimenez, Tel: +34 911 23 45 89.\n- Departamento de naurología: Dr. Fran Gonzalez, Tel: +34 911 23 45 42.';
  } else {
    return 'Lo siento, no entiendo lo que dices. Por favor, intentalo de nuevo.';
  }
}