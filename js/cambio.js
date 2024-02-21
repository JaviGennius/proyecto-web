function validarDNI() {
    let dni=document.getElementById("dni");
    let dniValor = dni.value.trim();
    let dni_correcto = /^[0-9]{8}[A-Za-z]$/;
    if (!dni_correcto.test(dniValor) || dniValor === "") {
        dni.style.borderColor = "red";
        return false;
    } else {
        dni.style.borderColor = "green";
        return true;
    }
}

function validarContrasena() {
    let contrasena=document.getElementById("contrasena");
    let contrasenaValor = contrasena.value.trim();
    let expresionRegular = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{3,16}$/;

    if (expresionRegular.test(contrasena) || contrasenaValor === "") {
        contrasena.style.borderColor = "red";
        return false;
    } else {
        contrasena.style.borderColor = "green";
        return true;
    }
}

function validarContrasenaVeficada(){
    let contrasena=document.getElementById("contrasena");
    let contrasena_verific=document.getElementById("contrasena_verific");
    
    let contrasenaValor = contrasena.value.trim();
    let contrasena_verificValor = contrasena_verific.value.trim();

    if (contrasena_verificValor === "" || contrasena_verificValor  !== contrasenaValor) {
        contrasena_verific.style.borderColor = "red";    
        return false;
    } else {
        contrasena_verific.style.borderColor = "green";
        return true;
    }
}

function validarFormulario() {
    let esDNI = validarDNI();
    let esContrasena = validarContrasena();
    let esVerificarContrasena = validarContrasenaVeficada();

    if (esDNI && esContrasena && esVerificarContrasena) {
        document.getElementById("formulario").style.display = "none";
        document.getElementById("cabecera").style.display = "none";
        document.getElementById("cargar").style.display = "block";
        alert("Cambio de contraseña exitoso")
    } else {
        alert("Por favor, complete todos los campos correctamente.");
    }
}

//document.getElementById("dni").addEventListener("blur", validarDNI);
// document.getElementById("contrasena").addEventListener("blur", validarContrasena);
// document.getElementById("contrasena_verific").addEventListener("blur", validarContrasenaVeficada);
// document.getElementById("submitButton").addEventListener("click", validarFormulario);
