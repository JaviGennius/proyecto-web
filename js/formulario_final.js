function validarNombre() {
    var nombre = document.getElementById("nombre");
    var nombreValor = nombre.value.trim();
    if (nombreValor === "") {
        nombre.style.borderColor = "red";
        document.getElementById('mensajenombre').style.display = 'block';
        return false;
    } else {
        nombre.style.borderColor = "green";
        document.getElementById('mensajenombre').style.display = 'none';
        return true;
    }
}

function validarApellidos() {
    var primero = document.getElementById("primero");
    var segundo = document.getElementById("segundo");
    var primeroValor = primero.value.trim();
    var segundoValor = segundo.value.trim();
    if (primeroValor === "" || segundoValor === "") {
        primero.style.borderColor = "red";
        segundo.style.borderColor = "red";
        document.getElementById('mensajeapellido1').style.display = 'block';
        document.getElementById('mensajeapellido2').style.display = 'block';
        return false;
    } else {
        primero.style.borderColor = "green";
        segundo.style.borderColor = "green";
        document.getElementById('mensajeapellido1').style.display = 'none';
        document.getElementById('mensajeapellido2').style.display = 'none';
        return true;
    }
}



function validarFechaNacimiento() {
    var dia = document.getElementById("dia").value;
    var mes = document.getElementById("mes").value;
    var ano = document.getElementById("ano").value;
    var diaElement = document.getElementById("dia");
    var mesElement = document.getElementById("mes");
    var anoElement = document.getElementById("ano");

    if (dia === "" || mes === "" || ano === "") {
        diaElement.style.borderColor = "red";
        mesElement.style.borderColor = "red";
        anoElement.style.borderColor = "red";
        document.getElementById('mensajedia').style.display = 'block';
        document.getElementById('mensajemes').style.display = 'block';
        document.getElementById('mensajeano').style.display = 'block';
        return false;
    } else {
        diaElement.style.borderColor = "green";
        mesElement.style.borderColor = "green";
        anoElement.style.borderColor = "green";
        document.getElementById('mensajedia').style.display = 'none';
        document.getElementById('mensajemes').style.display = 'none';
        document.getElementById('mensajeano').style.display = 'none';
        return true;
    }
}




function validarSexo() {
    var sexo = document.getElementById("sexo");
    if (sexo.value === "") {
        sexo.style.borderColor = "red";
        document.getElementById('mensajesexo').style.display = 'block';
        return false;
    } else {
        sexo.style.borderColor = "green";
        document.getElementById('mensajesexo').style.display = 'none';
        return true;
    }
}

function validarTelefono() {
    var telefonoInput = document.getElementById("telefono");
    var telefono = telefonoInput.value;
    var telefonoRegex = /^\d+$/;
    if (telefono === "" || !telefonoRegex.test(telefono)) {
        telefonoInput.style.borderColor = "red";
        document.getElementById('mensajetelefono').style.display = 'block';
        return false;
    } else {
        telefonoInput.style.borderColor = "green";
        document.getElementById('mensajetelefono').style.display = 'none';
        return true;
    }
}



function validarEmail() {
    var emailInput = document.getElementById("email");
    var email = emailInput.value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "" || !emailRegex.test(email)) {
        emailInput.style.borderColor = "red";
        document.getElementById('mensajecorreo').style.display = 'block';
        return false;
    } else {
        emailInput.style.borderColor = "green";
        document.getElementById('mensajecorreo').style.display = 'none';
        return true;
    }
}

function validarFormulario() {
    var esNombreValido = validarNombre();
    var sonApellidosValidos = validarApellidos();
    var esFechaNacimientoValida = validarFechaNacimiento();
    var esSexoValido = validarSexo();
    var esTelefonoValido = validarTelefono();
    var esEmailValido = validarEmail();

    if (esNombreValido && sonApellidosValidos && esFechaNacimientoValida && esSexoValido && esTelefonoValido && esEmailValido) {
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
document.getElementById("primero").addEventListener("blur", validarApellidos);
document.getElementById("segundo").addEventListener("blur", validarApellidos);
document.getElementById("dia").addEventListener("blur", validarFechaNacimiento);
document.getElementById("mes").addEventListener("blur", validarFechaNacimiento);
document.getElementById("ano").addEventListener("blur", validarFechaNacimiento);
document.getElementById("sexo").addEventListener("blur", validarSexo);
document.getElementById("telefono").addEventListener("blur", validarTelefono);
document.getElementById("email").addEventListener("blur", validarEmail);
document.getElementById("submitButton").addEventListener("click", validarFormulario);