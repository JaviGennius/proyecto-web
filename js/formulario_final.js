function validarNombre() {
    var nombre = document.getElementById("nombre");
    var nombreValor = nombre.value.trim();
    var errorNombre = document.getElementById("error_nombre");
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
    var primero=document.getElementById("primero");
    var primeroValor = primero.value.trim();
    var errorApellido1=document.getElementById("error_apellido1");

    if (primeroValor === "") {
        errorApellido1.style.display = "block";
        primero.style.borderColor = "red";
    } else {
        errorApellido1.style.display = "none";
        primero.style.borderColor = "green";
    }
}


function validarSegundoApellido() {
    var segundo = document.getElementById("segundo");
    var segundoValor = segundo.value.trim();
    var errorApellido2 = document.getElementById("error_apellido2");
    if (segundoValor === "") {
        errorApellido2.style.display = "block";
        segundo.style.borderColor = "red";
    } else {
        errorApellido2.style.display = "none";
        segundo.style.borderColor = "green";
    }
}

function validarFechaNacimiento() {
    var dia = document.getElementById("dia").value;
    var mes = document.getElementById("mes").value;
    var ano = document.getElementById("ano").value;
    var diaElement = document.getElementById("dia");
    var mesElement = document.getElementById("mes");
    var anoElement = document.getElementById("ano");
    var errorEdad = document.getElementById("error_edad");

    if (dia === "" || mes === "" || ano === "") {
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
    var sexo = document.getElementById("sexo");
    var errorSexo = document.getElementById("error_sexo");
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
    var telefonoInput = document.getElementById("telefono");
    var telefono = telefonoInput.value;
    var telefonoRegex = /^\d+$/;
    var errorTelefono = document.getElementById("error_tel");
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
    var emailInput = document.getElementById("email");
    var email = emailInput.value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var errorEmail = document.getElementById("error_email");
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
    var esNombreValido = validarNombre();
    var esPrimerApellidosValido = validarPrimerApellido();
    let esSegundoApellidoValido = validarSegundoApellido();
    var esFechaNacimientoValida = validarFechaNacimiento();
    var esSexoValido = validarSexo();
    var esTelefonoValido = validarTelefono();
    var esEmailValido = validarEmail();


    if (esNombreValido && esPrimerApellidosValido && esSegundoApellidoValido && esFechaNacimientoValida && esSexoValido && esTelefonoValido && esEmailValido) {
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
