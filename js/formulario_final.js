function validarNombre() {
    var nombre = document.getElementById("nombre");
    var nombreValor = nombre.value.trim();
    if (nombreValor === "") {
        nombre.style.borderColor = "red";
        return false;
    } else {
        nombre.style.borderColor = "green";
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
        return false;
    } else {
        primero.style.borderColor = "green";
        segundo.style.borderColor = "green";
        return true;
    }
}

function validarFechaNacimiento() {
    var dia = document.getElementById("dia").value;
    var mes = document.getElementById("mes").value;
    var ano = document.getElementById("ano").value;
    if (dia === "" || mes === "" || ano === "") {
        return false;
    } else {
        return true;
    }
}

function validarSexo() {
    var sexo = document.getElementById("sexo").value;
    if (sexo === "") {
        return false;
    } else {
        return true;
    }
}

function validarTelefono() {
    var telefono = document.getElementById("telefono").value;
    if (telefono === "") {
        return false;
    } else {
        return true;
    }
}

function validarEmail() {
    var email = document.getElementById("email").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "" || !emailRegex.test(email)) {
        return false;
    } else {
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
        document.getElementById("patientForm").submit();
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