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

// Agrega más funciones de validación para los otros campos aquí...

function validarFormulario() {
    var esNombreValido = validarNombre();
    var sonApellidosValidos = validarApellidos();
    // Agrega más variables para las otras validaciones aquí...

    if (esNombreValido && sonApellidosValidos /* && otras validaciones... */) {
        document.getElementById("patientForm").submit();
    } else {
        alert("Por favor, complete todos los campos correctamente.");
    }
}
