function validarNombre() {
    let nombre = document.getElementById("nombre");
    let nombreValor = nombre.value.trim();
    let errorNombre = document.getElementById("error_nombre");
    if (nombreValor === "") {
        errorNombre.style.display = "block"
        nombre.style.borderColor = "red";
        return false;
    } else {
        errorNombre.style.display = "none";
        nombre.style.borderColor = "green";
        return true;
    }
}


function validarPrimerApellido() {
    let primero= document.getElementById("primero");
    let primeroValor = primero.value.trim();
    let errorApellido1= document.getElementById("error_apellido1");

    if (primeroValor === "") {
        errorApellido1.style.display = "block";
        primero.style.borderColor = "red";
        return false;
    } else {
        errorApellido1.style.display = "none";
        primero.style.borderColor = "green";
        return true;
    }
}


function validarSegundoApellido() {
    let segundo = document.getElementById("segundo");
    let segundoValor = segundo.value.trim();
    let errorApellido2 = document.getElementById("error_apellido2");
    if (segundoValor === "") {
        errorApellido2.style.display = "block";
        segundo.style.borderColor = "red";
        return false;
    } else {
        errorApellido2.style.display = "none";
        segundo.style.borderColor = "green";
        return true;
    }
}

function validarFechaNacimiento() {
    let dia = document.getElementById("dia").value;
    let mes = document.getElementById("mes").value;
    let ano = document.getElementById("ano").value;
    let diaElement = document.getElementById("dia");
    let mesElement = document.getElementById("mes");
    let anoElement = document.getElementById("ano");
    let errorEdad = document.getElementById("error_edad");

    if (dia === "" || mes === "" || ano === "" || ano < 1950) {
        errorEdad.style.display = "block";
        diaElement.style.borderColor = "red";
        mesElement.style.borderColor = "red";
        anoElement.style.borderColor = "red";
        return false;
    } else {
        errorEdad.style.display = "none";
        diaElement.style.borderColor = "green";
        mesElement.style.borderColor = "green";
        anoElement.style.borderColor = "green";
        return true;
    }
}

function validarSexo() {
    let sexo = document.getElementById("sexo");
    let errorSexo = document.getElementById("error_sexo");
    if (sexo.value === "") {
        errorSexo.style.display = "block";
        sexo.style.borderColor = "red";
        return false;
    } else {
        errorSexo.style.display = "none";
        sexo.style.borderColor = "green";
        return true;
    }
}


function validarTelefono() {
    let telefonoInput = document.getElementById("telefono");
    let telefono = telefonoInput.value;
    let telefonoRegex = /^\d+$/;
    let errorTelefono = document.getElementById("error_tel");
    if (telefono === "" || !telefonoRegex.test(telefono)) {
        errorTelefono.style.display = "block";
        telefonoInput.style.borderColor = "red";
        return false;
    } else {
        errorTelefono.style.display = "none";
        telefonoInput.style.borderColor = "green";
        return true;
    }
}

function validarEmail() {
    let emailInput = document.getElementById("email");
    let email = emailInput.value;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let errorEmail = document.getElementById("error_email");
    if (email === "" || !emailRegex.test(email)) {
        errorEmail.style.display = "block";
        emailInput.style.borderColor = "red";
        return false;
    } else {
        errorEmail.style.display = "none";
        emailInput.style.borderColor = "green";
        return true;
    }
}


function validarFormulario() {
    let esNombreValido = validarNombre();
    let esPrimerApellidoValido = validarPrimerApellido();
    let esSegundoApellidoValido = validarSegundoApellido();
    let esFechaNacimientoValida = validarFechaNacimiento();
    let esSexoValido = validarSexo();
    let esTelefonoValido = validarTelefono();
    let esEmailValido = validarEmail();


    if (esNombreValido && esPrimerApellidoValido && esSegundoApellidoValido && esFechaNacimientoValida && esSexoValido && esTelefonoValido && esEmailValido) {
        setTimeout(function() {
            window.location.href = '../index.html'; // Funcion sacada de Chatgpt
        }, 3000);
        document.getElementById("patientForm").style.display = "none";
        document.getElementById("cabecera").style.display = "none";
        document.getElementById("cargar").style.display = "block";
    } else {
        alert("Por favor, complete todos los campos correctamente.");
    }
}


document.getElementById("nombre").addEventListener("blur", validarNombre);
document.getElementById("primero").addEventListener("blur", validarPrimerApellido);
document.getElementById("segundo").addEventListener("blur", validarSegundoApellido);
document.getElementById("dia").addEventListener("blur", validarFechaNacimiento);
document.getElementById("mes").addEventListener("blur", validarFechaNacimiento);
document.getElementById("ano").addEventListener("blur", validarFechaNacimiento);
document.getElementById("sexo").addEventListener("blur", validarSexo);
document.getElementById("telefono").addEventListener("blur", validarTelefono);
document.getElementById("email").addEventListener("blur", validarEmail);
document.getElementById("submitButton").addEventListener("click", validarFormulario);
